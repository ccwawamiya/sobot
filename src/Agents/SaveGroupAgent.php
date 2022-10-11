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
 * Class SaveGroupAgent
 * 增加坐席到技能组
 *
 * 接口说明：
 * 增加坐席到技能组
 *
 * @property-write string $agent_ids 坐席id,多个坐席id用英文逗号","隔开
 * @method SaveGroupAgent agentIds($value) 多个坐席id用英文逗号","隔开
 * @method SaveGroupAgent whereGroupid(string $value) 技能组id
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class SaveGroupAgent extends Sobot
{


    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/group_agent/save_agent';
    }
}