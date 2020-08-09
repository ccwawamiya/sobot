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
 * Class DeleteGroups
 * 删除技能组
 *
 * 接口说明：
 * 删除所属公司技能组信息
 *
 * @method DeleteGroups whereGroupid(string $value) 技能组id
 *
 * @package MuCTS\Sobot\Agents
 */
class DeleteGroups extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/basic/5/group/delete_groups';
    }
}