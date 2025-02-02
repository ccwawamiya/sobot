<?php


namespace Ccwawamiya\Sobot\Contracts;


use Ccwawamiya\Sobot\Exceptions\NotFoundException;

/**
 * Class Response
 * @package Ccwawamiya\Sobot\Contracts
 */
abstract class Response
{
    use ResponseCnEnum;

    protected $sub_fields = [];

    /**
     * Response constructor.
     * @param $result
     * @throws NotFoundException
     */
    public function __construct($result)
    {
        $this->init($result);
    }

    /**
     * 实例化
     *
     * @param $result
     * @throws NotFoundException
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function init($result)
    {
        foreach ($result as $key => $value) {
            if (is_array($value)) {
                $this->{$key} = $this->iniArray($key, $value);
            } else {
                $this->{$key} = $value;
            }
        }
    }

    /**
     * 数组
     *
     * @param array $array
     * @return bool
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function isKeyValue(array $array)
    {
        foreach ($array as $key => $value) {
            if (is_numeric($key)) {
                return false;
            }
        }
        return true;
    }

    /**
     * 断定是否是数组
     *
     * @param array $arr
     * @return bool
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function isArr(array $arr)
    {
        foreach ($arr as $key => $value) {
            if (is_numeric($key)) {
                if (!is_array($value)) {
                    continue;
                }
                if (!$this->isArr($value)) {
                    return false;
                }
            } else {
                return false;
            }
        }
        return true;
    }

    /**
     * 获取类型文件
     *
     * @param string $key
     * @return string
     */
    public function getClassName(string $key)
    {
        $name = underline_to_hump($key);
        $class = in_array($key, $this->sub_fields) ? get_class($this) : get_class($this) . '\\' . $name;
        return class_exists($class) ? $class : get_namespace($this) . '\\' . $name;
    }

    /**
     * 初始化响应数据
     *
     * @param string $key
     * @param array $value
     * @return array|mixed
     * @throws NotFoundException
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function iniArray(string $key, array $value)
    {
        $class = $this->getClassName($key);

        if (class_exists($class)) {
            if ($this->isKeyValue($value)) {
                $value = new $class($value);
            } elseif (!$this->isArr($value)) {
                foreach ($value as $k => $v) {
                    $value[$k] = $this->iniArray($key, $v);
                }
            }
        }
        return $value;
    }

    /**
     * get
     * @param $name
     * @return null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function __get($name)
    {
        $method = 'get' . underline_to_hump($name);
        if (method_exists($this, $method)) {
            return $this->{$method}();
        }
        return null;
    }
}