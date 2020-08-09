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

namespace MuCTS\Sobot\Agents\UpdateAgent;

/**
 * Class Request
 * @property-write string $agent_nick 坐席昵称
 * @property-write string $agent_name 坐席真实姓名
 * @property-write int $agent_role_type 坐席角色类型
 * @property-write string|null $departid 部门ID
 * @property-write string|null $group_ids 技能组ID，坐席所属多技能组，技能组ID之间以逗号分隔
 * @property-write int $max_accept 最大接待上限，0-100正整数
 * @property-write string|null $phone_no 坐席手机号
 * @property-write int|null $agent_status 坐席状态，0未激活，1启用中，9停用，-1删除 (坐席状态是已启用可以修改为停用，反之停用可以修改为启用，其余状态不可修改)
 *
 * @method Request whereAgentid(string $value) 坐席ID
 * @method Request agentNick(string $value) 坐席昵称
 * @method Request agentName(string $value) 坐席真实姓名
 * @method Request agentRoleType(string $value) 坐席角色类型
 * @method Request departid(string $value) 部门ID
 * @method Request maxAccept(string $value) 最大接待上限，0-100正整数
 * @method Request phoneNo(string $value) 坐席手机号
 * @method Request agentStatus(int $value) 坐席状态，0未激活，1启用中，9停用，-1删除 (坐席状态是已启用可以修改为停用，反之停用可以修改为启用，其余状态不可修改)
 *
 * @package MuCTS\Sobot\Agents\UpdateAgent
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{
    /**
     * 技能组ID，坐席所属多技能组，技能组ID之间以逗号分隔
     * @param array|string $value
     * @return Request
     */
    public function groupIds($value)
    {
        $this->param['group_ids'] = is_array($value) ? implode(',', $value) : $value;
        return $this;
    }
}