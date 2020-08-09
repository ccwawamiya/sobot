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

namespace MuCTS\Sobot\OnlineService\GetDetailByCId\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $sender_name 发送者昵称
 * @property-read int $sender_type 发送者类型 0-用户，1-机器人，2-客服
 * @property-read string $sender_type_cn 发送者类型
 * @property-read string $sender_face 发送者头像
 * @property-read string $receiver_name 接收者昵称
 * @property-read int $receiver_type 接收者类型 0-用户，1-机器人，2-客服
 * @property-read string $receiver_type_cn 接收者类型
 * @property-read string $receiver_face 接收者头像
 * @property-read string $ts 发送时间 格式：yyyy-MM-dd HH:mm:ss
 * @property-read string $t 发送时间 格式：毫秒级时间戳
 * @property-read string $msg 会话消息
 * @property-read int $msg_type 消息类型：0-文本，1-图片，2-音频，3-富文本
 * @property-read string $msg_type_cn 消息类型
 * @property-read string $cid 会话ID
 * @package MuCTS\Sobot\OnlineService\QueryCIds\Response
 */
class Items extends Response
{
}