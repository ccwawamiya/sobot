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

namespace Ccwawamiya\Sobot\Agents\QueryGroupAgents\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $companyid 企业id
 * @property-read string $create_agentid 创建人id
 * @property-read int $create_time 创建时间
 * @property-read string $agent_role_type 角色类型，参见角色类型字典表
 * @property-read string $agent_role_name 角色名称，参见角色类型字典表
 * @property-read int|null $effect_time 生效时间
 * @property-read int|null $login_status 登陆状态，0未登录，1登录
 * @property-read string|null $phone_no 手机号码
 * @property-read string $agent_email 坐席邮箱
 * @property-read string $agentid 坐席id
 * @property-read string $agent_name 坐席名称
 * @property-read string $agent_nick 坐席昵称
 * @property-read int $agent_status 坐席状态，0未激活，1启用中，2平台管控，9停用，-1删除
 * @property-read string $agent_status_cn 坐席状态
 * @property-read string $update_time 更新时间
 * @package Ccwawamiya\Sobot\Agents\QueryAgents\Response
 */
class Items extends Response
{
}