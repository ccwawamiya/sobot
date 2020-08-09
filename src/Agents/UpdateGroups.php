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

namespace MuCTS\Sobot\Agents;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class UpdateGroups
 * 更新技能组
 *
 * 接口说明：
 * 更新所属公司技能组信息
 *
 * @property-write string $group_name 技能组名称
 *
 * @method UpdateGroups groupName(string $value) 技能组名称
 * @method UpdateGroups whereGroupid(string $value) 技能组id
 *
 * @package MuCTS\Sobot\Agents
 */
class UpdateGroups extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/group/update_groups';
    }
}