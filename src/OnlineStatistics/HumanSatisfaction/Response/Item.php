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

namespace MuCTS\Sobot\OnlineStatistics\HumanSatisfaction\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read string $effect_session_count 人工有效会话总数
 * @property-read int $total_times 已评价总数
 * @property-read string $comment_rate 参评率
 * @property-read int $initiative 客户主动参评
 * @property-read string $initiative_rate 客户主动参评占比
 * @property-read string $invites_rate 客服邀请参评占比
 * @property-read int $invites 客服邀请参评
 * @property-read int $solved_count 评价解决总数
 * @property-read int $solved 已解决数
 * @property-read int $not_solved 未解决数
 * @property-read string $solved_rate 已解决率
 * @property-read float $avg_num 平均分
 * @property-read int $good 好评数
 * @property-read string $good_rate 好评率
 * @property-read int $middle 中评数
 * @property-read string $middle_rate 中评率
 * @property-read int $bad 差评数
 * @property-read string $bad_rate 差评率
 * @property-read int $score4 4分数
 * @property-read int $score3 3分数
 * @property-read int $score2 2分数
 * @property-read int $score1 1分数
 * @package MuCTS\Sobot\OnlineStatistics\HumanSatisfaction\Response
 */
class Item extends Response
{

}