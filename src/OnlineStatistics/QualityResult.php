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
 * Class QualityResult
 * 获取在线质检结果
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：获取在线质检结果
 *
 * @method QualityResult whereStartDate(string $value) 开始日期（yyyy-MM-dd）
 * @method QualityResult whereEndDate(string $value) 结束日期（yyyy-MM-dd）
 * @method QualityResult wherePage(int $value) 当前页码
 * @method QualityResult whereSize(int $value) 每页条数（默认100，最大可传入10000）
 *
 * @package Ccwawamiya\Sobot\OnlineStatistics
 */
class QualityResult extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/wb/5/data/quality_result';
    }
}