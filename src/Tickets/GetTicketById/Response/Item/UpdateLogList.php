<?php


namespace Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class UpdateLogList
 * @property-read string $update_title 操作记录标题
 * @property-read string|null $update_content 操作记录内容
 * @property-read int $log_from 操作记录来源：1 页面操作，2 流转触发器，3 定时触发器
 * @property-read string $log_from_cn 操作记录来源
 * @property-read string update_datetime 操作记录时间    2018-09-18 10:34:45
 * @property-read int $start_type 操作人类型：0 坐席 1 客户
 * @property-read string $start_type_cn 操作人类型
 * @property-read string $update_agent_name 操作人名称
 * @property-read string $face_img 操作人头像
 * @package Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item
 */
class UpdateLogList extends Response
{
}