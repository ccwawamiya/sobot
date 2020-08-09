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

namespace MuCTS\Sobot\OnlineStatistics\RobotSatisfaction\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $effect_session_count 机器人有效会话总数
 * @property-read int $total_times 已评价总数
 * @property-read string $comment_rate 参评率
 * @property-read int $solved 已解决数
 * @property-read string $not_solved 未解决数
 * @property-read string $resolution_rate 已解决率
 * @package MuCTS\Sobot\OnlineStatistics\RobotSatisfaction\Response
 */
class Item extends Response
{

}