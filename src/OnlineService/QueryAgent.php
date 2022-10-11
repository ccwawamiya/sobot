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

namespace Ccwawamiya\Sobot\OnlineService;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class QueryAgent
 * 查询在线客服列表
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来查询当前系统下所有在线客服的详情。
 *
 * @package Ccwawamiya\Sobot\OnlineService
 */
class QueryAgent extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/query_agent';
    }
}