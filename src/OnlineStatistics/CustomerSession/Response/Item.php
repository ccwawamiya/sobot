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

namespace MuCTS\Sobot\OnlineStatistics\CustomerSession\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $total_consult_session 总咨询会话
 * @property-read int $total_valid_session 总有效会话
 * @property-read string $total_valid_session_rate 总有效会话率
 * @property-read string $avg_session_duration 平均总会话接待时长
 * @property-read string $avg_total_session_duration 平均总会话时长
 * @property-read int $total_invalid_session 总无效会话
 * @package MuCTS\Sobot\OnlineStatistics\CustomerSession\Response
 */
class Item extends Response
{

}