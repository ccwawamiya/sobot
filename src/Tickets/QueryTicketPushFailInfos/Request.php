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

namespace Ccwawamiya\Sobot\Tickets\QueryTicketPushFailInfos;

/**
 * Class Request
 *
 * @method Request whereStartDatetime(string $startDatetime) 开始时间，2019-09-18 00:00:00
 * @method Request whereEndDatetime(string $endDatetime) 结束时间，2019-09-18 23:59:59
 * @method Request pageNo(int $pageNo)	 当前页数，默认第一页
 * @method Request pageSize(int $pageSize) 当前页显示条数，默认每页显示15条，最大每页显示50条
 * @package Ccwawamiya\Sobot\Tickets\QueryTicketPushFailInfos
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}