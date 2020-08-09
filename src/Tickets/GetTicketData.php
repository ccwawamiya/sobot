<?php


namespace MuCTS\Sobot\Tickets;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class GetTicketData
 * 查询工单统计概览
 *
 * 接口说明：
 * 获取某个时间段工单对应的数量。
 * @method GetTicketData whereStartDatetime(string $startDatetime) 开始时间，2019-09-18 00:00:00
 * @method GetTicketData whereEndDatetime(string $endDatetime) 结束时间，2019-09-18 23:59:59
 * @package MuCTS\Sobot\Tickets
 */
class GetTicketData extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/get_ticket_data';
    }
}