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
 * Class SaveOptionDataValue
 * 工单自定义字段（选择型）添加选项信息
 *
 * @example 工单选择型自定义字段批量添加选项信息。
 * @method SaveOptionDataValue fieldid(string $fieldid) 工单自定义字段ID
 * @method SaveOptionDataValue fieldDataValue(array $fieldDataValue) 工单自定义字段选项信息, 格式:[["field_value" => "字段选项值", "field_text" => "字段文本值"]]
 * @method SaveOptionDataValue pushFieldDataValueItem(string $fieldValue, string $fieldText) 追加工单自定义字段选项信息
 * @method SaveOptionDataValue agentid(string $agentid) 操作坐席ID
 * @method SaveOptionDataValue agentName(string $agentName) 操作坐席名称
 * @package Ccwawamiya\Sobot\Tickets
 */
class SaveOptionDataValue extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/save_option_data_value';
    }
}