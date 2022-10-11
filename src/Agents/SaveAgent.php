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

namespace Ccwawamiya\Sobot\Agents;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class SaveAgent
 * 新增坐席信息
 *
 * 接口说明：新增坐席信息
 *
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
 * @method SaveAgent agentNick(string $value) 坐席昵称
 * @method SaveAgent agentName(string $value) 坐席真实名称
 * @method SaveAgent phoneNo(string $value) 手机号码
 * @method SaveAgent password(string $value) 密码
 * @method SaveAgent email(string $value) 坐席邮箱
 * @method SaveAgent agentRoleType(int $value) 坐席角色，4444：全功能管理员；9999：呼叫管理员；8888：工单管理员；7777：全功能客服；6669：呼叫客服；1111：在线客服；2222：在线管理员；5555：工单客服
 * @method SaveAgent departid(string $value) 部门ID
 * @method SaveAgent groupIds($value) 技能组ID，坐席所属多技能组，技能组ID之间以逗号分隔
 * @method SaveAgent maxAccept(string $value) 最大接待上限，0-100的正整数
 *
 * @package Ccwawamiya\Sobot\Agents
 */
class SaveAgent extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/agent/save_agent';
    }
}