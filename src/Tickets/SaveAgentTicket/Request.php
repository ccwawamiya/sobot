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

namespace MuCTS\Sobot\Tickets\SaveAgentTicket;


/**
 * Class Request
 * /**
 * Class Request
 * 创建工单（坐席）
 *
 * 备注：
 * 1、此处所传工单自定义字段，必须是所传工单分类id关联工单模板中的自定义字段。
 * 2、分类关联模板中的自定义字段通过“查询工单分类关联的工单模板信息“接口获取。
 * 3、工单分类ID需要调用“查询数据字典”中工单分类获取具体值。
 * 4、如需上传附件，需要调用“附件上传（坐席）”进行。
 *
 * @property-write string $companyid 企业ID
 * @property-write string $ticket_title 工单标题
 * @property-write string $userid 客户ID
 * @property-write string $ticket_content 工单问题描述
 * @property-write int $ticket_from 工单来源，1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，12 邮件留言，13语音留言，16微信小程序客户留言，17企业微信客户留言
 * @property-write string $deal_groupid 受理技能组ID
 * @property-write string $deal_group_name 受理技能组名称
 * @property-write string $deal_agentid 受理坐席ID
 * @property-write string $deal_agent_name 受理坐席名称
 * @property-write string $create_agentid 创建坐席ID
 * @property-write string $create_agent_name 创建坐席名称
 * @property-write string $recordid 记录ID,呼叫记录ID或会话记录ID
 * @property-write int $ticket_status 工单状态,0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @property-write int $ticket_level 工单优先级,0低，1中，2高，3紧急
 * @property-write string $ticket_typeid 工单分类ID,叶子节点的分类ID
 * @property-write string $file_str 附件路径，多个附件，附件之间采用英文分号";"隔开
 * @property-write array $copy_agent 抄送坐席，格式：[["agent_name"=>"坐席名称","agent_mail"=>"坐席邮箱"]]
 * @property-write array $extend_fields 工单自定义字段信息，格式：[["fieldid"=>"自定义字段ID","field_value"=>"自定义字段值"]]
 *
 * @method Request companyid(string $companyid) 企业ID
 * @method Request ticketTitle(string $ticketTitle) 工单标题
 * @method Request userid(string $userid) 客户ID
 * @method Request ticketContent(string $ticketContent) 工单问题描述
 * @method Request ticketFrom(string $ticketFrom) 工单来源, 1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，12 邮件留言，13语音留言，16微信小程序客户留言，17企业微信客户留言
 * @method Request dealGroupid(string $dealGroupid) 受理技能组ID
 * @method Request dealGroupName(string $dealGroupName) 受理技能组名称
 * @method Request dealAgentid(string $dealAgentid) 受理坐席ID
 * @method Request dealAgentName(string $dealAgentName) 受理坐席名称
 * @method Request createAgentid(string $createAgentid) 创建坐席ID
 * @method Request createAgentName(string $createAgentName) 创建坐席名称
 * @method Request recordid(string $recordid) 记录ID, 呼叫记录ID或会话记录ID
 * @method Request ticketStatus(int $ticketStatus) 工单状态, 0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @method Request ticketLevel(int $ticketLevel) 工单优先级, 0低，1中，2高，3紧急
 * @method Request ticketTypeid(string $ticketTypeid) 工单分类ID, 叶子节点的分类ID
 * @method Request fileStr(string $fileStr) 附件路径, 多个附件，附件之间采用英文分号";"隔开
 * @method Request copyAgent(array $copyAgent) 抄送坐席，格式：[["agent_name" => "坐席名称", "agent_mail" => "坐席邮箱"]]
 * @method Request extendFields(array $extendFields) 工单自定义字段信息，格式：[["fieldid" => "自定义字段ID", "field_value" => "自定义字段值"]]
 * @package MuCTS\Sobot\Tickets\Request
 */
class Request extends \MuCTS\Sobot\Contracts\Request
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