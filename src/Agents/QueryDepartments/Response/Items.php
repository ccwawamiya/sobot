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

namespace Ccwawamiya\Sobot\Agents\QueryDepartments\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $companyid 公司ID
 * @property-read string $departid 部门ID
 * @property-read string $depart_name 部门名称
 * @property-read string $depart_level 部门级别
 * @property-read string $depart_type 部门职能,1-在线，2-呼叫，3-电销，4-工单（部门职能可能有多个，多个以逗号分隔，例如：1,2,3）
 * @property-read string $depart_type_cn 部门职能
 * @property-read string $parentid 所属父级部门ID
 * @property-read Items[] $sub_department_list 子级部门信息
 * @package Ccwawamiya\Sobot\Agents\QueryDepartments\Response
 */
class Items extends Response
{
    protected $sub_fields = ['sub_department_list'];

    /**
     * 部门职能
     * @return string
     */
    public function getDepartTypeCn()
    {
        $departType = $this->depart_type;
        $departType = explode(',', $departType);
        $departTypeCn = [
            1 => '在线',
            2 => '呼叫',
            3 => '电销',
            4 => '工单'
        ];
        foreach ($departType as &$type) {
            $type = $departTypeCn[$type] ?? '未知';
        }
        return implode(',', $departType);
    }
}