<?php


namespace MuCTS\Sobot\Contracts;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use MuCTS\Sobot\Code;
use MuCTS\Sobot\Exceptions\ConfigException;
use MuCTS\Sobot\Exceptions\NotFoundException;
use MuCTS\Sobot\Exceptions\ResponseException;
use MuCTS\Sobot\Exceptions\SobotException;
use MuCTS\Sobot\Token\Token;

/**
 * Class Sobot
 * @property-read Request $request
 * @package MuCTS\Sobot\Contracts
 */
abstract class Sobot
{
    /** @var array */
    private $config;
    /** @var string */
    private $host;
    /** @var Cache|null */
    protected $cache;
    /** @var int 超时时间 */
    protected $timeout = 15;
    /** @var array */
    protected $headers = [];
    /** @var string */
    protected $contentType = 'json';
    /** @var int 尝试次数 */
    private $tries = 0;

    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const METHOD_PUT = 'put';
    const METHOD_DELETE = 'delete';

    /**
     * Sobot constructor.
     * @param array $config
     * @param Cache|null $cache
     * @throws ConfigException
     */
    public function __construct(array $config, ?Cache $cache = null)
    {
        $this->setConfig($config);
        $this->host = 'https://www.sobot.com';
        $this->cache = $cache;
    }

    /**
     * 测试配置
     *
     * @param array $config
     * @throws ConfigException
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-04
     */
    public function setConfig(array $config): void
    {
        if (!array_key_exists('app_id', $config) || empty($config['app_id'])) {
            throw new ConfigException('app id can not be empty');
        }
        if (!is_string($config['app_id'])) {
            throw new ConfigException('please enter the correct app id');
        }
        if (!array_key_exists('app_key', $config) || empty($config['app_key'])) {
            throw new ConfigException('app key can not be empty');
        }
        if (!is_string($config['app_key'])) {
            throw new ConfigException('please enter the correct app key');
        }
        $this->config = $config;
    }

    /**
     * get app id
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-04
     */
    public function getAppId(): string
    {
        return $this->config['app_id'];
    }

    /**
     * get app key
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-04
     */
    protected function getAppKey(): string
    {
        return $this->config['app_key'];
    }

    /**
     * 接口请求地址
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-04
     */
    protected function getRequestUrl(): string
    {
        return sprintf('%s/%s', rtrim($this->host), ltrim($this->getRequestPath()));
    }

    /**
     * 接口请求
     *
     * @return Response
     * @throws ResponseException
     * @throws SobotException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws ConfigException
     * @throws NotFoundException
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function request(): Response
    {
        $params = $this->getRequestParam()->toArray();
        $method = $this->getRequestMethod();
        $client = new Client(["headers" => $this->getHeader(), "timeout" => $this->getTimeout()]);
        try {
            $response = $client->request($method, $this->getRequestUrl(), [$this->getContentType() => $params]);
        } catch (RequestException $exception) {
            $response = $exception->getResponse();
        } catch (\Exception $exception) {
            throw  new SobotException($exception->getMessage(), $exception->getCode(), $exception->getPrevious());
        }
        $status = $response->getStatusCode();
        $content = $response->getBody();
        if ($status != 200) {
            throw new ResponseException('Abnormal response', $status, $content);
        }
        $res = json_decode($content, true);
        if (!is_array($res) || !array_key_exists('ret_code', $res) || $res['ret_code'] != Code::SUCCESS_CODE) {
            $retCode = @$res['ret_code'];
            // 如果是TOKEN失效重新获取
            if (!$this->tries && $retCode == Code::TOKEN_IS_INVALID && !($this instanceof Token)) {
                (new Token($this->config, $this->cache))->getToken(true);
                $this->tries++;
                return $this->request();
            }
            throw new ResponseException(@$res['ret_msg'] ?: 'Sobot Response err', @$res['ret_code'] ?: Code::SYSTEM_ERR, $content);
        }
        $class = get_class($this) . '\\Response';
        if (class_exists($class)) {
            return new $class($res);
        }
        throw new NotFoundException(sprintf('Class[%s] File Not Found.', $class));
    }

    /**
     * 获取请求参数传递方式
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function getContentType(): string
    {
        if (strtolower($this->getRequestMethod()) == self::METHOD_GET) {
            return 'query';
        }
        return $this->contentType ?: 'json';
    }

    /**
     * 获取头部数据
     *
     * @return array
     * @throws ConfigException
     * @throws ResponseException
     * @throws SobotException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @version 1.2.2
     * @date 2020-08-05
     * @author herry.yao <yuandeng@aliyun.com>
     */
    protected function getHeader(): array
    {
        if (!($this instanceof Token)) {
            $this->addHeader('token', (new Token($this->config, $this->cache))->getToken());
        }
        return $this->headers;
    }

    /**
     * 添加头部信息
     *
     * @param string|array $key
     * @param null|string $value
     * @return $this
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function addHeader($key, $value = null)
    {
        $headers = is_array($key) ? $key : [$key => $value];
        $this->headers = array_merge($this->headers, $headers);
        return $this;
    }

    /**
     * 获取超时时间
     *
     * @return int
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * 设置超时时间
     *
     * @param int $timeout
     * @return $this
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * 接口请求方式
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    abstract public function getRequestMethod(): string;

    /**
     * 接口请求参数
     *
     * @return Request
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getRequestParam(): Request
    {
        return $this->request;
    }

    /**
     * 接口请求地址
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    abstract public function getRequestPath(): string;

    /**
     * 魔术方法 获取值
     *
     * @param $name
     * @return Request|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function __get($name)
    {
        $class = get_class($this) . '\\' . underline_to_hump($name);
        if (class_exists($class)) {
            $this->{$name} = new $class($this->config, $this->cache);
            return $this->{$name};
        }
        return null;
    }

    /**
     * 魔术方法赋值
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        if (!is_object($value)) {
            $name = underline_to_hump($name);
            $this->request->{$name}($name);
        } else {
            $this->{$name} = $value;
        }
    }

    /**
     * 方法实例
     *
     * @param $name
     * @param $arguments
     * @return Sobot
     * @version 1.2.2
     * @date 2020-08-05
     * @author herry.yao <yuandeng@aliyun.com>
     */
    public function __call($name, $arguments)
    {
        $this->request->{$name}(...$arguments);
        return $this;
    }
}