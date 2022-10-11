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

namespace Ccwawamiya\Sobot\OnlineStatistics;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class MessageStats
 * 会话消息统计
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来获取会话消息统计结果。
 *
 * @method MessageStats whereStartDate(string $value) 开始日期（yyyy-MM-dd）
 * @method MessageStats whereEndDate(string $value) 结束日期（yyyy-MM-dd）
 *
 * @package Ccwawamiya\Sobot\OnlineStatistics
 */
class MessageStats extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/wb/5/data/message_stats';
    }
}