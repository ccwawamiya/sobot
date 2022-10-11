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

namespace Ccwawamiya\Sobot\Users\GetUserByEmail\Response\Item;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class ExtendFieldValues
 * @property-read string $fieldid 扩展字段ID
 * @property-read string $field_value 扩展字段值
 * @property-read string|null $field_text 扩展字段文本值，针对选项类型的字段
 * @property-read int $field_type 字段类型,1、单行文本2、多行文本3、日期4、时间5、数值6、下拉列表（选项）7、单选框（选项）8、复选框（选项）
 * @property-read string $field_type_cn 字段类型
 * @package Ccwawamiya\Sobot\Users\GetUserByEmail\Response\Item
 */
class ExtendFieldValues extends Response
{

}