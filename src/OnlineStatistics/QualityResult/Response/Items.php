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

namespace MuCTS\Sobot\OnlineStatistics\QualityResult\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $chat_start_time 会话开始时间（毫秒值）
 * @property-read string $update_time 质检时间
 * @property-read string $schemeid 质检方案id
 * @property-read float $total_score 质检方案满分
 * @property-read float $standard_total_score 质检标准分满分
 * @property-read float $add_total_score 质检加分项满分
 * @property-read float $minus_total_score 质检减分项满分
 * @property-read float $quality_score 质检得分
 * @property-read float $standard_quality_score 质检标准分得分
 * @property-read float $add_quality_score 质检加分项得分
 * @property-read float $minus_quality_score 质检减分项得分
 * @property-read string $staffid 客服id
 * @property-read string $staff_name 客服姓名
 * @property-read string $email 客服邮箱
 * @property-read string $cid 会话id
 * @package MuCTS\Sobot\OnlineStatistics\QualityResult\Response
 */
class Items extends Response
{

}