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

namespace Ccwawamiya\Sobot\Agents\QueryGroups\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $groupid 技能组ID
 * @property-read string $group_name 技能组名称
 * @property-read int $group_type 技能组类型，0工单坐席组，1在线坐席组，2电话坐席组，3 电销组
 * @property-read string $group_type_cn 技能组类型
 * @package Ccwawamiya\Sobot\Agents\QueryGroups\Response
 */
class Items extends Response
{
    /**
     * 技能组类型
     * @return string
     */
    public function getGroupTypeCn()
    {
        $groupType = intval($this->group_type);
        switch ($groupType) {
            case 0:
                return '工单坐席组';
            case 1:
                return '在线坐席组';
            case 2:
                return '电话坐席组';
            case 3:
                return '电销组';
            default:
                return '未知';
        }
    }
}