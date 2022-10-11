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
 * Class QueryGroups
 * 查询技能组
 *
 * 接口说明：
 * 获取所属公司技能组信息
 *
 * @method QueryGroups pageNo(int $value) 起始页码, 不传或参数为错误值, 默认1
 * @method QueryGroups pageSize(int $value) 每页条数, 不传或参数为错误值, 默认每页15条
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class QueryGroups extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/agent/query_groups';
    }
}