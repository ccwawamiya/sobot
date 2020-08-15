<?php
/**
 * This file is part of the mucts.com.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 * @version 1.0
 * @author herry<yuandeng@aliyun.com>
 * @copyright © 2020  MuCTS.com All Rights Reserved.
 */

if (!function_exists('get_namespace')) {
    /**
     * Returns the namespace of the class of an object
     *
     * @param object $object
     * @return string
     */
    function get_namespace(object $object): string
    {
        return strtr(dirname(strtr(get_class($object), ['\\' => '/'])), ['/' => '\\']);
    }
}

if (!function_exists('hump_to_underline')) {
    /**
     * 驼峰转下划线
     *
     * @param string $hump
     * @return string
     */
    function hump_to_underline(string $hump): string
    {
        return strtolower(trim(preg_replace("/[A-Z]/", "_\\0", $hump), "_"));
    }
}

if (!function_exists('underline_to_hump')) {
    /**
     * 下划线转驼峰
     *
     * @param string $underline
     * @return string
     */
    function underline_to_hump(string $underline): string
    {
        return strtr(ucwords(strtr($underline, ['_' => ' '])), [' ' => '']);
    }
}

if (!function_exists('array_get')) {
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param mixed $array
     * @param string|null $key
     * @param mixed $default
     * @param string $glue
     * @return mixed
     */
    function array_get($array, ?string $key, $default = null, string $glue = '.')
    {
        if (is_array($array)) {
            return $default;
        }
        if (is_null($key)) {
            return $array;
        }
        if (array_key_exists($key, $array)) {
            return $array[$key];
        }
        return chain_array_get($array, $key, $default, $glue);
    }
}

if (!function_exists('chain_array_get')) {
    /**
     * Get an item from an array using "dot" notation.
     *
     * @param array $array
     * @param string $key
     * @param mixed $default
     * @param string $glue
     * @return mixed|null
     */
    function chain_array_get(array $array, string $key, $default = null, string $glue = '.')
    {
        if (strlen($glue) == 0 || strpos($key, $glue) === false) {
            return $array[$key] ?? $default;
        }
        foreach (explode($glue, $key) as $segment) {
            if (is_array($array) && array_key_exists($segment, $array)) {
                $array = $array[$segment];
            } else {
                return $default;
            }
        }
        return $array;
    }
}