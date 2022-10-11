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
 * Class TicketExtendFields
 * 查询自定义字段定义信息
 *
 * @example 返回工单自定义字段的基本信息
 * @package Ccwawamiya\Sobot\Tickets
 */
class TicketExtendFields extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/query_ticket_extend_fields';
    }
}