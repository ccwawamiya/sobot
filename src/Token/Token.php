<?php


namespace MuCTS\Sobot\Token;

use MuCTS\Sobot\Contracts\Sobot;
use MuCTS\Sobot\Token\Token\Response;

/**
 * Class Token
 * @mixin \MuCTS\Sobot\Token\Token\Request
 * @package MuCTS\Sobot\Token
 */
class Token extends Sobot
{
    /**
     * 接口请求方式
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }


    /**
     * 接口请求地址
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getRequestPath(): string
    {
        return 'api/get_token';
    }

    /**
     * 获取智齿TOKEN
     *
     * @param bool $updating
     * @return mixed|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \MuCTS\Sobot\Exceptions\ResponseException
     * @throws \MuCTS\Sobot\Exceptions\SobotException|
     * @throws \MuCTS\Sobot\Exceptions\ConfigException
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getToken($updating = false)
    {
        $key = 'sobot_' . substr(md5(json_encode([__METHOD__, $this->getAppId()])), -5);
        if (!is_null($this->cache) && !$updating && $this->cache->exists($key)) {
            return $this->cache->get($key);
        }
        /** @var Response $res */
        $res     = $this->request();
        $token   = $res->item->token;
        $expires = $res->item->expires_in;
        !is_null($this->cache) && $this->cache->set($key, $token, $expires);
        return $token;
    }
}