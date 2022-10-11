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

namespace Ccwawamiya\Sobot\OnlineStatistics\ExportData;


/**
 * Class Request
 * @method Request whereTaskType(int $value) 任务类型, 1:visit, 2:conversation, 3:evaluation, 4:msg, 5:user, 6:ticket
 * @method Request whereDate(string $value) 日期, 日期（yyyy-MM-dd）
 * @package Ccwawamiya\Sobot\OnlineStatistics\ExportData
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}