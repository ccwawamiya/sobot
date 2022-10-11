<?php


namespace Ccwawamiya\Sobot\Tickets\TicketList\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $ticketid 工单ID
 * @property-read string $ticket_title 工单标题
 * @property-read string $ticket_type_name 工单分类,显示格式：一级/二级/三级
 * @property-read string $ticket_content 问题描述
 * @property-read string $ticket_code 工单编号
 * @property-read string $ticket_from 工单来源,0工单中心，1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，6 PC-在线工作台，7客户中心，8呼叫中心，9微信公众号-在线工作台，10 H5-在线工作台，11 APP-在线工作台，12 邮件留言，13语音留言，14微信小程序-在线工作台，15企业微信-在线工作台，16微信小程序客户留言，17企业微信客户留言
 * @property-read string $ticket_from_cn 工单来源
 * @property-read string $ticket_level 工单优先级,0低，1中，2高，3紧急
 * @property-read string $ticket_level_cn 工单优先级
 * @property-read string $ticket_status 工单状态,0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @property-read string $ticket_status_cn 工单状态
 * @property-read string $start_type 工单发起人类型,0坐席，1客户
 * @property-read string $start_type_cn 工单发起人类型
 * @property-read string $start_name 工单发起人名称
 * @property-read string $deal_agent_name 受理坐席名称
 * @property-read string $deal_group_name 受理技能组名称
 * @property-read string $create_datetime 工单创建时间
 * @property-read string $update_datetime 工单更新时间
 * @property-read string $user_nick 客户昵称
 * @property-read string $user_name 客户名称
 * @property-read string $user_tels 客户电话,多个电话号码，号码之间采用英文逗号","隔开
 * @property-read string $user_emails 客户邮箱,多个邮箱，邮箱之间采用英文逗号","隔开
 * @package Ccwawamiya\Sobot\Tickets\TicketList\Response
 */
class Items extends Response
{
}