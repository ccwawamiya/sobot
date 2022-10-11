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

namespace Ccwawamiya\Sobot\OnlineStatistics\ExportData\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read string $companyid 公司ID
 * @property-read string $create_time 创建时间
 * @property-read int $task_type 任务类型
 * @property-read string $result_date 日期
 * @property-read string $file_path 文件路径
 * @property-read string $description 描述
 * @package Ccwawamiya\Sobot\OnlineStatistics\ExportData\Response
 */
class Item extends Response
{

}