<?php


namespace Ccwawamiya\Sobot\Token;

use Ccwawamiya\Sobot\Contracts\Sobot;
use Ccwawamiya\Sobot\Token\Token\Response;

/**
 * Class Token
 * @mixin \Ccwawamiya\Sobot\Token\Token\Request
 * @package Ccwawamiya\Sobot\Token
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
     * @throws \Ccwawamiya\Sobot\Exceptions\ResponseException
     * @throws \Ccwawamiya\Sobot\Exceptions\SobotException|
     * @throws \Ccwawamiya\Sobot\Exceptions\ConfigException
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