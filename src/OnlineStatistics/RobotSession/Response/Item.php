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

namespace Ccwawamiya\Sobot\OnlineStatistics\RobotSession\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read string $consult_session 机器人咨询会话
 * @property-read string $valid_session 机器人有效会话
 * @property-read string $invalid_session 机器人无效会话
 * @property-read string $valid_reception_rate 有效接待率
 * @property-read string $self_reception_session 机器人独立接待会话
 * @property-read string $self_reception_rate 独立接待率
 * @property-read string $to_human_session 转人工会话
 * @property-read string $to_human_session_rate 转人工会话率
 * @property-read string $avg_session_duration 平均会话时长
 * @package Ccwawamiya\Sobot\OnlineStatistics\RobotSession\Response
 */
class Item extends Response
{

}