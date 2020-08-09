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