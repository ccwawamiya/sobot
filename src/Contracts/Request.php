<?php


namespace Ccwawamiya\Sobot\Contracts;


abstract class Request
{
    protected $config = [];
    protected $cache;
    protected $param = [];

    public function __construct(array $config, ?Cache $cache = null)
    {
        $this->config = $config;
        $this->cache = $cache;
    }

    /**
     * 获取应用ID
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getAppId(): string
    {
        return $this->config['app_id'];
    }

    /**
     * 获取授权秘钥
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function getAppKey(): string
    {
        return $this->config['app_key'];
    }

    /**
     * 返回数组
     *
     * @return array
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function toArray(): array
    {
        return $this->param;
    }

    /**
     * call
     *
     * @param $name
     * @param $arguments
     * @return Request
     * @version 1.2.2
     * @date 2020-08-05
     * @author herry.yao <yuandeng@aliyun.com>
     */
    public function __call($name, $arguments)
    {
        $name = hump_to_underline($name);
        if (strpos($name, 'where') === 0) {
            $name = substr($name, 6);
        }
        $this->param[$name] = $arguments[0];
        return $this;
    }

    /**
     * 魔术方法赋值
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $name = hump_to_underline($name);
        $this->param[$name] = $value;
    }
}