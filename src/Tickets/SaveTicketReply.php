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

namespace Ccwawamiya\Sobot\Tickets;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class SaveTicketReply
 * 回复工单（坐席）
 *
 * 接口说明：
 * 1)客户：客户可回复所有人
 * 2)坐席：坐席回复分为仅回复坐席和回复所有人。
 *
 * @property-write string $ticket_title    工单标题
 * @method SaveTicketReply ticketTitle(string $ticketTitle) 工单标题
 * @property-write string $ticket_content 工单问题描述
 * @method SaveTicketReply ticketContent($ticketContent) 工单问题描述
 * @property-write string $ticketid    工单ID
 * @method SaveTicketReply ticketid(string $ticketid) 工单ID
 * @property-write string $get_ticket_datetime 获取工单信息时间,2019-09-19 13:00:00 (当前时间)
 * @method SaveTicketReply getTicketDatetime(string $getTicketDatetime)  获取工单信息时间, 2019-09-19 13:00:00 (当前时间)
 * @property-write string $reply_content 工单回复内容
 * @method SaveTicketReply replyContent(string $replyContent) 工单回复内容
 * @property-write  int $reply_type 工单回复类型：0 所有人可见，1 仅坐席可见
 * @method SaveTicketReply replyType(int $replyType) 工单回复类型：0 所有人可见，1 仅坐席可见
 * @property-write string|null $deal_groupid 受理技能组ID
 * @method SaveTicketReply dealGroupid(?string $dealGroupid) 受理技能组ID
 * @property-write string|null $deal_group_name    受理技能组名称
 * @method SaveTicketReply dealGroupName(?string $dealGroupName) 受理技能组名称
 * @property-write string|null $deal_agentid 受理坐席ID
 * @method SaveTicketReply dealAgentid(?string $dealAgentid) 受理坐席ID
 * @property-write string|null $deal_agent_name    受理坐席名称
 * @method SaveTicketReply dealAgentName(?string $dealAgentName) 受理坐席名称
 * @property-write string $reply_agentid 回复坐席ID，指当前处理回复的坐席
 * @method SaveTicketReply replyAgentid(string $replyAgentid) 回复坐席ID，指当前处理回复的坐席
 * @property-write string $reply_agent_name    回复坐席名称
 * @method SaveTicketReply replyAgentMame(string $replyAgentMame)
 * @property-write int $ticket_status 工单状态：0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @method SaveTicketReply ticketStatus(int $ticketStatus)
 * @property-write int $ticket_level 工单优先级：0低，1中，2高，3紧急
 * @method SaveTicketReply ticketLevel(int $ticketLevel)
 * @property-write string|null $reply_file_str 回复附件路径：多个附件，附件之间采用英文分号";"隔开
 * @method SaveTicketReply replyFileStr(?string $replyFileStr)
 * @property-write array|null $copy_agent 抄送坐席,格式：[["agent_name"=>"坐席名称","agent_mail"=>"坐席邮箱"]]
 * @method SaveTicketReply copyAgent(?array $copyAgent)
 * @method SaveTicketReply pushCopyAgentItem(string $agentName, string $agentMail) 追加抄送坐席项
 * @property-write array|null extend_fields 工单自定义字段信息，格式：[["fieldid"=>"自定义字段ID","field_value"=>"自定义字段值"]]
 * @method SaveTicketReply extendFields(?array $extendFields)
 * @method SaveTicketReply pushExtendFieldsItem(string $fieldid, string $fieldValue) 追加工单自定义字段信息项
 * @package Ccwawamiya\Sobot\Tickets
 */
class SaveTicketReply extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/save_ticket_reply';
    }
}