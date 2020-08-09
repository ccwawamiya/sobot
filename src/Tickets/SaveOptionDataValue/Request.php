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

namespace MuCTS\Sobot\Tickets\SaveOptionDataValue;


/**
 * Class Request
 *
 * @property-write string $fieldid 工单自定义字段ID
 * @property-write array $field_data_value 工单自定义字段选项信息, 格式:[["field_value" => "字段选项值", "field_text" => "字段文本值"]]
 * @property-write string $agentid 操作坐席ID
 * @property-write string $agent_name 操作坐席名称
 *
 * @method Request fieldid(string $fieldid) 工单自定义字段ID
 * @method Request fieldDataValue(array $fieldDataValue) 工单自定义字段选项信息, 格式:[["field_value" => "字段选项值", "field_text" => "字段文本值"]]
 * @method Request agentid(string $agentid) 操作坐席ID
 * @method Request agentName(string $agentName) 操作坐席名称
 * @package MuCTS\Sobot\Tickets\SaveOptionDataValue
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{
    /**
     * 追加工单自定义字段选项信息
     *
     * @param string $fieldValue
     * @param string $fieldText
     * @return $this
     */
    public function pushFieldDataValueItem(string $fieldValue, string $fieldText)
    {
        if (!array_key_exists('field_data_value', $this->param)) {
            $this->param['field_data_value'] = [];
        }
        $this->param['field_data_value'][] = ['field_value' => $fieldValue, 'field_text' => $fieldText];
        return $this;
    }
}