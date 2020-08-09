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

namespace MuCTS\Sobot\Agents\SaveGroups;

/**
 * Class Request
 * @property-write string $group_name 技能组名称
 * @property-write int $group_type 技能组类型，0工单客服组，1在线客服组，2电话客服组，3 电销组
 *
 * @method Request groupName(string $value) 技能组名称
 * @method Request groupType(int $value) 技能组类型，0工单客服组，1在线客服组，2电话客服组，3 电销组
 * @package MuCTS\Sobot\Agents\SaveGroups
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}