<?php


namespace Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class ExtendFieldsList
 * @property-read string $fieldid 自定义字段ID
 * @property-read string $field_name 自定义字段名称
 * @property-read int $field_type 自定义字段类型，1单行文本，2多行文本，3日期，4时间，5 数值，6下拉列表，7复选框，8单选框
 * @property-read string $field_type_cn 自定义字段类型
 * @property-read string|null $field_text 选择型字段选项文本值
 * @property-read string $field_value 自定义字段值
 * @package Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item
 */
class ExtendFieldsList extends Response
{
}