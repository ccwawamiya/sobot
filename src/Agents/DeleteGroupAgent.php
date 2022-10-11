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
 * 删除技能组内坐席
 *
 * 接口说明：
 * 删除技能组内坐席
 *
 * @method DeleteGroupAgent whereGroupid(string $value) 技能组id
 * @property-write string $agentid 坐席id
 * @method DeleteGroupAgent agentid(string $value) 坐席id
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class DeleteGroupAgent extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/group_agent/delete_agent';
    }
}