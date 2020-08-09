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

namespace MuCTS\Sobot\Tickets;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class SaveUserReply
 * 回复工单（客户）
 *
 * 接口说明：
 * 1)客户：客户可回复所有人
 * 2)坐席：坐席回复分为仅回复坐席和回复所有人。
 *
 * @property-write string $ticketid 工单ID
 * @property-write string $reply_content 工单回复内容
 * @property-write string $file_str 回复附件路径，多个附件，附件之间采用英文分号";"隔开
 *
 * @method SaveUserReply ticketid($ticketid) 工单ID
 * @method SaveUserReply replyContent($replyContent) 工单回复内容
 * @method SaveUserReply fileStr($fileStr) 回复附件路径，多个附件，附件之间采用英文分号";"隔开
 * @package MuCTS\Sobot\Tickets
 */
class SaveUserReply extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/save_user_reply';
    }
}