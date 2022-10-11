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

namespace Ccwawamiya\Sobot\Agents\SaveAgent;

/**
 * Class Request
 * @property-write string $agent_nick 坐席昵称
 * @property-write string $agent_name 坐席真实名称
 * @property-write string|null $phone_no 手机号码
 * @property-write string|null $password 密码
 * @property-write string $email 坐席邮箱
 * @property-write int $agent_role_type 坐席角色，4444：全功能管理员；9999：呼叫管理员；8888：工单管理员；7777：全功能客服；6669：呼叫客服；1111：在线客服；2222：在线管理员；5555：工单客服
 * @property-write string|null $departid 部门ID
 * @property-write string|null $group_ids 技能组ID，坐席所属多技能组，技能组ID之间以逗号分隔
 * @property-write int $max_accept 最大接待上限，0-100的正整数
 *
 * @method Request agentNick(string $value) 坐席昵称
 * @method Request agentName(string $value) 坐席真实名称
 * @method Request phoneNo(string $value) 手机号码
 * @method Request password(string $value) 密码
 * @method Request email(string $value) 坐席邮箱
 * @method Request agentRoleType(int $value) 坐席角色，4444：全功能管理员；9999：呼叫管理员；8888：工单管理员；7777：全功能客服；6669：呼叫客服；1111：在线客服；2222：在线管理员；5555：工单客服
 * @method Request departid(string $value) 部门ID
 * @method Request maxAccept(string $value) 最大接待上限，0-100的正整数
 * @package Ccwawamiya\Sobot\Agents\SaveAgent
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
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