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

namespace MuCTS\Sobot\Users\QueryUserExtendFields\Response\Item;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class ExtendFields
 * @property-read string $companyid 公司ID
 * @property-read string $field_name 字段名称
 * @property-read int $field_status 字段状态,0无效（删除）1有效
 * @property-read int $field_type 字段类型,1、单行文本 input 2、多行文本 textarea 3、日期YYYY-MM-DD 4、时间hh:mm 5、数值 6、下拉列表（选项） 7、复选框（选项） 8、单选框（选项） 9、级联字段
 * @property-read string $field_type_cn 字段类型
 * @property-read string $field_variable 字段变量名
 * @property-read string $fieldid 字段ID
 * @property-read int $fill_flag 是否必填,0否1是
 * @property-read int $open_flag 开启开关,0关闭1 开启
 * @property-read int $operate_type 自定义字段类型	1、客户自定义字段 11、客户固定字段
 * @property-read string $sort_no 排序标识
 * @property-read string $remark 字段描述	
 * @package MuCTS\Sobot\Users\QueryUserExtendFields\Response\Item
 */
class ExtendFields extends Response
{

}