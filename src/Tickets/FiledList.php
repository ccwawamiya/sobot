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
 * Class FiledList
 * 查询工单分类关联的工单模板
 *
 * 返回工单分类关联的工单模板中的自定义字段信息
 *
 * @method  FiledList whereTicketTypeid(string $ticketTypeid) 工单分类ID
 * @package Ccwawamiya\Sobot\Tickets
 */
class FiledList extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/query_fileds_by_typeid';
    }
}