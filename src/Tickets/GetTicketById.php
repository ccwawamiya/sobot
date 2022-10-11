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
 * Class GetTicketById
 * 查询工单详情页
 *
 * 接口说明：
 * 返回该条工单的详细信息（包括工单回复、操作历史）。
 *
 * @method GetTicketById whereTicketid(string $ticketid) 工单ID
 * @package Ccwawamiya\Sobot\Tickets
 */
class GetTicketById extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/get_ticket_by_id';
    }
}