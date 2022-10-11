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
 * Class OfflineMsgData
 * 查询离线消息数据
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取会话已经结束后，客服发送给用户的消息（即离线消息）。
 * 开放平台接口对接的用户，由于所有消息都会推送到消息地址中，没有离线消息数据。
 *
 * @method OfflineMsgData whereVisitorid(string $value) 访客id
 *
 * @package Ccwawamiya\Sobot\OnlineService
 */
class OfflineMsgData extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/offline_msg_data';
    }
}