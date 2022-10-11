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
 * Class QueryDepartments
 * 查询组织结构
 *
 * 接口说明：
 * 获取系统中添加坐席所需的组织结构信息
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class QueryDepartments extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/agent/query_departments';
    }
}