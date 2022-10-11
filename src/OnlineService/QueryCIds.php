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
 * Class QueryCIds
 * 查询客户会话列表
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取某个用户在系统中的会话记录列表（cid列表）。
 *
 * @method QueryCIds whereVisitorid(?string $value) 访客id，visitorid与partnerid选择其一
 * @method QueryCIds wherePartnerid(?string $value) 企业自己的用户id，可自行传值，与from参数配套使用
 * @method QueryCIds whereFrom(?int $value) 来源：0-开放平台，1-pc/h5/sdk
 * @package Ccwawamiya\Sobot\OnlineService
 */
class QueryCIds extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/query_cids';
    }
}