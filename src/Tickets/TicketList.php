<?php


namespace MuCTS\Sobot\Tickets;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class TicketList
 * 查询工单列表
 *
 * 接口说明：
 * 按照工单创建时间段查询工单列表信息
 *
 * @method TicketList whereCreateStartDatetime($createStartDatetime) 工单创建开始时间    2018-09-18 00:00:00
 * @method TicketList whereCreateEndDatetime($createEndDatetime) 工单创建结束时间 2018-09-18 23:59:59（查询创建时间段不能大于一个月）
 * @method TicketList whereTicketStatus($ticketStatus) 工单状态    0尚未受理，1受理中，2等待回复，3已解决，99已关闭，98已删除
 * @method TicketList whereTicketFrom($ticketFrom) 工单来源    0工单中心，1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，6 PC-在线工作台，7客户中心，8呼叫中心，9微信公众号-在线工作台，10 H5-在线工作台，11 APP-在线工作台，12 邮件留言，13语音留言，14微信小程序-在线工作台，15企业微信-在线工作台，16微信小程序客户留言，17企业微信客户留言
 * @method TicketList whereTicketTypeid($ticketTypeid) 工单分类ID
 * @method TicketList whereUserid($userid) 客户ID
 * @method TicketList whereDealAgentid($dealAgentid) 受理坐席ID
 * @method TicketList pageNo($pageNo) 当前页数，默认第一页
 * @method TicketList pageSize($pageSize) 当前页显示条数，默认每页显示15条，最大每页显示50条
 * @package MuCTS\Sobot\Tickets
 */
class TicketList extends Sobot
{
    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/query_tickets';
    }
}