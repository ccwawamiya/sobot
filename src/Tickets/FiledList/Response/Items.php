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

namespace Ccwawamiya\Sobot\Tickets\FiledList\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\Tickets\FiledList\Response\Items\FieldDataList;

/**
 * Class Items
 * @property-read string $fieldid 自定义字段ID
 * @property-read string $field_name 自定义字段名称
 * @property-read int $field_type 自定义字段类型:1单行文本，2多行文本，3日期，4时间，5 数值，6下拉列表，7复选框，8单选框
 * @property-read int $fill_flag 自定义字段是否必填:0 否 1 是
 * @property-read FieldDataList[]|null field_data_list 选择型字段的选项信息
 * @package Ccwawamiya\Sobot\Tickets\FiledList\Response
 */
class Items extends Response
{

}