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

namespace MuCTS\Sobot\Agents;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class QueryAgents
 * 查询技能组内坐席
 *
 * 接口说明：
 * 查询技能组内坐席
 *
 * @method QueryGroupAgents whereGroupid(string $value) 技能组id
 *
 * @package MuCTS\Sobot\Agents
 */
class QueryGroupAgents extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/group_agent/query_agents';
    }
}