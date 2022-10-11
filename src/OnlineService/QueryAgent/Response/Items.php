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

namespace Ccwawamiya\Sobot\OnlineService\QueryAgent\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $agentid 客服id
 * @property-read string[] $group_name 客服所在技能组名称列表
 * @property-read string[] $groupid 客服所在技能组id列表
 * @property-read string $agent_email 客服邮箱
 * @property-read string $agent_name 客服姓名
 * @property-read string $role_name 角色
 * @property-read string $agent_no 客服工号
 * @property-read string $agent_status 客服状态
 * @property-read string $create_time 创建时间（yyyy-MM-dd）
 * @property-read string $department_name 部门名称	
 * @package Ccwawamiya\Sobot\OnlineService\QueryAgent\Response
 */
class Items extends Response
{

}