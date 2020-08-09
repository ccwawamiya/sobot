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

namespace MuCTS\Sobot\Robot\SearchQuestionTypeList\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $companyid 公司id
 * @property-read string $parent_typeid 父级分类id
 * @property-read string $question_typeid 分类id
 * @property-read string $question_type_name 分类名称
 * @property-read string $type_level 分类级别
 * @property-read string $last 是否是最低级别
 * @property-read int $type_flag 分类类型：1-单轮问题分类；2-多轮问题分类
 * @package MuCTS\Sobot\Robot\SearchQuestionTypeList\Response
 */
class Items extends Response
{

}