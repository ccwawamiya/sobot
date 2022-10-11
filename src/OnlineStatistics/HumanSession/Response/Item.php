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

namespace Ccwawamiya\Sobot\OnlineStatistics\HumanSession\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read string $consult_session 人工咨询会话
 * @property-read string $self_reception_session 人工独立接待会话
 * @property-read string $self_reception_session_rate 人工独立接待会话占比
 * @property-read string $valid_session 人工有效会话
 * @property-read string $invalid_session 人工无效会话
 * @property-read string $valid_session_rate 人工有效会话率
 * @property-read string $valid_reception_session 人工有效接待会话
 * @property-read string $invalid_reception_session 人工无效接待会话
 * @property-read string $invalid_reception_rate 人工无效接待率
 * @property-read string $not_reception_session 人工未接待会话
 * @property-read string $not_reception_session_rate 人工未接待会话率
 * @property-read string $transfer_session 转接会话
 * @property-read string $black_session 拉黑会话
 * @property-read string $avg_session_duration 平均人工接待时长
 * @property-read string $solved_session 已解决会话
 * @property-read string $not_solved_session 未解决会话
 * @property-read string $not_mark_is_solved 未标注是否解决会话
 * @property-read string $max_meantime_recption 最大同时接待会话
 * @property-read string $initiative_session 主动发起会话量
 * @property-read string $valid_reception_rate 有效接待率
 * @property-read string $transfer_in 转入会话
 * @property-read string $transfer_out 转出会话
 * @package Ccwawamiya\Sobot\OnlineStatistics\HumanSession\Response
 */
class Item extends Response
{

}