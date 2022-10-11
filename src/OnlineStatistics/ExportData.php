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

namespace Ccwawamiya\Sobot\OnlineStatistics;

use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class ExportData
 *
 * 离线数据文件下载接口
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来获取各个业务模块的原始数据，可用于企业对数据归档或做数据分析等。
 * 注意：若需要使用该接口下载离线数据，需提前通知智齿进行数据整理安排，否则无法下载到数据。
 *
 * @method ExportData whereTaskType(int $value) 任务类型, 1:visit, 2:conversation, 3:evaluation, 4:msg, 5:user, 6:ticket
 * @method ExportData whereDate(string $value) 日期, 日期（yyyy-MM-dd）
 * @package Ccwawamiya\Sobot\OnlineStatistics
 */
class ExportData extends Sobot
{
    const TASK_TYPE_VISIT = 1;
    const TASK_TYPE_CONVERSATION = 2;
    const TASK_TYPE_EVALUATION = 3;
    const TASK_TYPE_MSG = 4;
    const TASK_TYPE_USER = 5;
    const TASK_TYPE_TICKET = 6;

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/wb/5/data/export_data';
    }
}