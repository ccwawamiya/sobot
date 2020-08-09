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

namespace MuCTS\Sobot\OnlineService;

use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class QuerySummary
 * 查询服务总结记录
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取服务总结记录。
 *
 * @method QuerySummary whereCid(string $value) 会话id
 */
class QuerySummary extends Sobot
{
    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/wb/5/data/query_summary';
    }
}