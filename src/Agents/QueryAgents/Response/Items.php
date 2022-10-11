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

namespace Ccwawamiya\Sobot\Agents\QueryAgents\Response;


use Ccwawamiya\Sobot\Agents\QueryAgents\Response\Items\Groups;
use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $agentid 坐席ID
 * @property-read string $companyid 公司ID
 * @property-read string $agent_name 坐席真实名称
 * @property-read string $agent_nick 坐席昵称
 * @property-read int $agent_status 坐席状态，0未激活，1启用中，9停用，-1删除
 * @property-read string $agent_status_cn 坐席状态
 * @property-read string $agent_role_type 坐席角色类型
 * @property-read string $agent_role_name 坐席角色名称
 * @property-read string|null $departid 坐席所属部门ID
 * @property-read string|null $depart_name 坐席所属部门名称，坐席所属多部门，部门名称之间以逗号分隔
 * @property-read string $agent_email 坐席邮箱
 * @property-read string|null $group_name 坐席所属技能组名称，坐席所属多技能组，技能组名称之间以分号分隔
 * @property-read string|null $phone_no 坐席手机号
 * @property-read Groups[] $groups 坐席所属技能组信息，groupid（技能组id）group_name（技能组名称）group_type（技能组类别 0 工单坐席组，1在线坐席组，2电话坐席组，3 电销组）
 * @package Ccwawamiya\Sobot\Agents\QueryAgents\Response
 */
class Items extends Response
{

}