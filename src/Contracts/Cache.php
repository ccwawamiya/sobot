<?php


namespace Ccwawamiya\Sobot\Contracts;


interface Cache
{
    /**
     * 缓存数据
     *
     * @param string $key
     * @param array|string $value
     * @param int $tts
     * @return bool
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function set(string $key, $value, $tts): bool;

    /**
     * 从缓存获取
     *
     * @param string $key
     * @return mixed
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function get(string $key);

    /**
     * 判断缓存释放存在
     *
     * @param string $key
     * @return bool
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function exists(string $key): bool;
}