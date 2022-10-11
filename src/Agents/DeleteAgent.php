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

namespace Ccwawamiya\Sobot\Agents;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class DeleteAgent
 * 删除坐席信息
 *
 * 接口说明：
 * 删除坐席信息
 *
 * @method DeleteAgent whereAgentid(string $value) 坐席ID
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class DeleteAgent extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/agent/delete_agent';
    }
}