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
 * Class QueryTicketPushFailInfos
 * 查询工单消息推送异常数据
 *
 * 接口说明：
 * 返回工单消息推送失败的数据
 *
 * @method QueryTicketPushFailInfos whereStartDatetime(string $startDatetime) 开始时间，2019-09-18 00:00:00
 * @method QueryTicketPushFailInfos whereEndDatetime(string $endDatetime) 结束时间，2019-09-18 23:59:59
 * @method QueryTicketPushFailInfos pageNo(int $pageNo)	 当前页数，默认第一页
 * @method QueryTicketPushFailInfos pageSize(int $pageSize) 当前页显示条数，默认每页显示15条，最大每页显示50条
 * @package Ccwawamiya\Sobot\Tickets
 */
class QueryTicketPushFailInfos extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/query_ticket_push_fail_infos';
    }
}