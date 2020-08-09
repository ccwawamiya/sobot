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

namespace MuCTS\Sobot\OnlineStatistics;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class HumanSession
 * 人工会话统计
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取人工会话概览统计结果。
 *
 * @method HumanSession whereStartDate(string $value) 开始日期（yyyy-MM-dd）
 * @method HumanSession whereEndDate(string $value) 结束日期（yyyy-MM-dd）
 *
 * @package MuCTS\Sobot\OnlineStatistics
 */
class HumanSession extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/wb/5/data/human_session';
    }
}