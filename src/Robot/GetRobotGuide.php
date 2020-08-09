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
 * Class GetRobotGuide
 * 获取常见问题
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可以调用在智齿后台配置的指定机器人的常见问题列表和引导语。
 *
 * @method GetRobotGuide whereRobotFlag(int $value) 机器人编号，可以在「设置-机器人-机器人信息」中查看
 * @package MuCTS\Sobot\Robot
 */
class GetRobotGuide extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/get_robot_guide';
    }
}