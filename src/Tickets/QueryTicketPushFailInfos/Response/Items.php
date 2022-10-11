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

namespace Ccwawamiya\Sobot\Tickets\QueryTicketPushFailInfos\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\Tickets\QueryTicketPushFailInfos\Response\Items\ExtendFieldsList;

/**
 * Class Items
 * @property-read string $ticketid 工单ID
 * @property-read string $companyid 公司ID
 * @property-read string $ticket_title 工单标题
 * @property-read string $ticket_content 问题描述
 * @property-read string $ticket_code 工单编号
 * @property-read int $ticket_from 工单来源 0工单中心，1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，6 PC-在线工作台，7客户中心，8呼叫中心，9微信公众号-在线工作台，10 H5-在线工作台，11 APP-在线工作台，12 邮件留言，13语音留言，14微信小程序-在线工作台，15企业微信-在线工作台，16微信小程序客户留言，17企业微信客户留言
 * @property-read int $ticket_level 工单优先级 0低，1中，2高，3紧急
 * @property-read int $ticket_status 工单状态 0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @property-read string $ticket_type_name 工单分类名称 显示格式：一级/二级/三级
 * @property-read string|null $deal_agentid 受理坐席ID
 * @property-read string|null $deal_agent_name 受理坐席名称
 * @property-read string|null $deal_groupid 受理技能组ID
 * @property-read string|null $deal_group_name 受理技能组名称
 * @property-read string|null $reply_content 工单回复内容
 * @property-read string $update_datetime 工单更新时间 2020-04-08 13:00:00
 * @property-read string $update_agent_name 操作坐席名称
 * @property-read string $userid 工单关联客户ID
 * @property-read string $user_nick 客户昵称
 * @property-read string|null $user_name 客户名称
 * @property-read string|null $user_tels 客户电话 多个电话号码，号码之间采用英文逗号,隔开
 * @property-read string|null $user_emails 客户邮箱 多个邮箱，邮箱之间采用英文逗号,隔开
 * @property-read string|null $recordid 工单关联记录ID 工单来源是呼叫中心这个是呼叫记录ID，来源是在线工作台-PC客服提交这个是会话记录ID
 * @property-read string|null $file_str 附件路径
 * @property-read string|null $voice_url 录音文件
 * @property-read string|null $hope_accept_time SLA规定的首次响应时间 2020-04-08 13:00:00
 * @property-read string|null $hope_complete_time SLA规定的首次解决时间 2020-04-08 13:00:00
 * @property-read int $is_reminder 催单信息标识，是否催单信息 0 否 1 是
 * @property-read string|null $reminder_agentid 催单坐席id
 * @property-read string|null $reminder_agent_name 催单坐席名称
 * @property-read string|null $reminder_remark 催单备注
 * @property-read string|null $reminder_time 催单时间 具体的时间点，例如2020-04-20 12:35:30
 * @property-read string|null $partnerid 关联客户对接id
 * @property-read ExtendFieldsList[]|null $extend_fields_list 工单自定义字段
 * @package Ccwawamiya\Sobot\Tickets\QueryTicketPushFailInfos\Response
 */
class Items extends Response
{

}