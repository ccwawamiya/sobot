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
 * Class QueryAgentRoles
 * 查询坐席角色
 *
 * 接口说明：
 * 获取系统中添加坐席所需的角色信息。
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class QueryAgentRoles extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/agent/query_agent_roles';
    }
}