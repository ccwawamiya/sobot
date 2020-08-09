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

namespace MuCTS\Sobot\Contracts;


use MuCTS\Sobot\Exceptions\NotFoundException;

abstract class Container
{
    /** @var array */
    protected $config;
    /** @var Cache|null */
    protected $cache;

    /**
     * Container constructor.
     * @param array $config
     * @param string|Cache|null $cache
     */
    public function __construct(array $config, $cache = null)
    {
        $this->config = $config;
        if (is_string($cache)) {
            $cache = class_exists($cache) ? new $cache() : null;
        }
        $this->cache = $cache;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws NotFoundException
     */
    public function __call($name, $arguments)
    {
        $name = underline_to_hump($name);
        $class = get_namespace($this) . '\\' . $name;
        if (class_exists($class)) {
            return new $class($this->config, $this->cache);
        }
        $class = get_class($this) . '\\' . $name;
        if (class_exists($class)) {
            return new $class($this->config, $this->cache);
        }
        $class = get_class($this) . '\\' . $name . '\\Client';
        if (class_exists($class)) {
            return new $class($this->config, $this->cache);
        }
        $class = get_class($this) . '\\' . $name . '\\' . $name;
        if (class_exists($class)) {
            return new $class($this->config, $this->cache);
        }
        throw new NotFoundException(sprintf('Class [%s] not found', $class));
    }
}