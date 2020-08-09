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

namespace MuCTS\Sobot\OnlineStatistics\QualityResult;


/**
 * Class Request
 * @method Request whereStartDate(string $value) 开始日期（yyyy-MM-dd）
 * @method Request whereEndDate(string $value) 结束日期（yyyy-MM-dd）
 * @method Request wherePage(int $value) 当前页码
 * @method Request whereSize(int $value) 每页条数（默认100，最大可传入10000）
 * @package MuCTS\Sobot\OnlineStatistics\QualityResult
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}