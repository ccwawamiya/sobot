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

namespace MuCTS\Sobot\Robot;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class DeleteRobotDoc
 * 删除知识库词条
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来删除知识库中的某个知识条目。
 *
 * @method DeleteRobotDoc whereDocid(string $value) 词条id
 * @method DeleteRobotDoc whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 *
 * @package MuCTS\Sobot\Robot
 */
class DeleteRobotDoc extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/delete_robot_doc';
    }
}