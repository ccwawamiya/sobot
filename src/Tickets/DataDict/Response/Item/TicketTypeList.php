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

namespace Ccwawamiya\Sobot\Tickets\DataDict\Response\Item;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class TicketTypeList
 * 工单分类信息    企业自定义分类，业务变化频繁
 *
 * @property-read string $typeid 分类ID
 * @property-read string $companyid 公司ID
 * @property-read string $type_name 分类名称
 * @property-read string $parentid 父ID
 * @property-read string $type_level 分类级别,最多五级（第一级，2：第二级，3：第三级，4：第四级，5：第五级）
 * @property-read string $node_flag 是否叶子节点,0 是 1 不是
 * @property-read TicketTypeList[]|null $sub_type_list 子分类信息,内容与ticket_type_list一致
 * @package Ccwawamiya\Sobot\Tickets\DataDict\Response\Item
 */
class TicketTypeList extends Response
{
    protected $sub_fields = ['sub_type_list'];
}