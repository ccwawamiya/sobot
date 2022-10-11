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

namespace Ccwawamiya\Sobot\Tickets;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class DataDict
 * 查询数据字典
 *
 * 接口说明：
 * 数据字典包含：工单分类、工单状态、工单优先级、抄送数据其中抄送，工单分类为动态字典项，返回数据会随企业自身配置会发生变化。需要上述数据具体值时，请调用此接口获取。
 *
 * @package Ccwawamiya\Sobot\Tickets
 */
class DataDict extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/get_data_dict';
    }
}