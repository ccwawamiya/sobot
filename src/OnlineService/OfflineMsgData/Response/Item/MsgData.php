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

namespace MuCTS\Sobot\OnlineService\OfflineMsgData\Response\Item;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\OnlineService\OfflineMsgData\Response\Item\MsgData\MsgList;

/**
 * Class MsgData
 * @property-read string $sender 发送者id
 * @property-read string $sender_name 发送者昵称
 * @property-read string $send_face 发送者头像
 * @property-read MsgList[] $msg_list 消息列表
 * @package MuCTS\Sobot\OnlineService\OfflineMsgData\Response\Item
 */
class MsgData extends Response
{

}