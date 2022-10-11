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

namespace Ccwawamiya\Sobot\Tickets\SaveTicketReply;

/**
 * Class Request
 * @property-write string $ticket_title	工单标题
 * @method Request ticketTitle(string $ticketTitle) 工单标题
 * @property-write string $ticket_content 工单问题描述
 * @method Request ticketContent($ticketContent) 工单问题描述
 * @property-write string $ticketid	工单ID
 * @method Request ticketid(string $ticketid) 工单ID
 * @property-write string $get_ticket_datetime 获取工单信息时间,2019-09-19 13:00:00 (当前时间)
 * @method Request getTicketDatetime(string $getTicketDatetime)  获取工单信息时间,2019-09-19 13:00:00 (当前时间)
 * @property-write string $reply_content 工单回复内容
 * @method Request replyContent(string $replyContent) 工单回复内容
 * @property-write  int $reply_type 工单回复类型：0 所有人可见，1 仅坐席可见
 * @method Request replyType(int $replyType) 工单回复类型：0 所有人可见，1 仅坐席可见
 * @property-write string|null $deal_groupid 受理技能组ID
 * @method Request dealGroupid(?string $dealGroupid) 受理技能组ID
 * @property-write string|null $deal_group_name	受理技能组名称
 * @method Request dealGroupName(?string $dealGroupName) 受理技能组名称
 * @property-write string|null $deal_agentid 受理坐席ID
 * @method Request dealAgentid(?string $dealAgentid) 受理坐席ID
 * @property-write string|null $deal_agent_name	受理坐席名称
 * @method Request dealAgentName(?string $dealAgentName) 受理坐席名称
 * @property-write string $reply_agentid 回复坐席ID，指当前处理回复的坐席
 * @method Request replyAgentid(string $replyAgentid) 回复坐席ID，指当前处理回复的坐席
 * @property-write string $reply_agent_name	回复坐席名称
 * @method Request replyAgentMame(string $replyAgentMame)
 * @property-write int $ticket_status 工单状态：0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @method Request ticketStatus(int $ticketStatus)
 * @property-write int $ticket_level 工单优先级：0低，1中，2高，3紧急
 * @method Request ticketLevel(int $ticketLevel)
 * @property-write string|null $reply_file_str 回复附件路径：多个附件，附件之间采用英文分号";"隔开
 * @method Request replyFileStr(?string $replyFileStr)
 * @property-write array|null $copy_agent 抄送坐席,格式：[["agent_name"=>"坐席名称","agent_mail"=>"坐席邮箱"]]
 * @method Request copyAgent(?array $copyAgent)
 * @property-write array|null extend_fields 工单自定义字段信息，格式：[["fieldid"=>"自定义字段ID","field_value"=>"自定义字段值"]]
 * @method Request extendFields(?array $extendFields)
 * @package Ccwawamiya\Sobot\Tickets\Request
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{
    /**
     * 追加工单自定义字段信息
     *
     * @param string $fieldid
     * @param string $fieldValue
     * @return $this
     */
    public function pushExtendFieldsItem(string $fieldid, string $fieldValue)
    {
        if (!array_key_exists('extend_fields', $this->param)) {
            $this->param['extend_fields'] = [];
        }
        $this->param['extend_fields'][] = ['fieldid' => $fieldid, 'field_value' => $fieldValue];
        return $this;
    }

    /**
     * 追加抄送坐席项
     *
     * @param string $agentName
     * @param string $agentMail
     * @return $this
     */
    public function pushCopyAgentItem(string $agentName, string $agentMail)
    {
        if (!array_key_exists('copy_agent', $this->param)) {
            $this->param['copy_agent'] = [];
        }
        $this->param['copy_agent'][] = ['agent_name' => $agentName, 'agent_mail' => $agentMail];
        return $this;
    }
}