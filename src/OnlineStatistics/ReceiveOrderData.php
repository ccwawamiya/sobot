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
 * Class ReceiveOrderData
 * 订单统计推送接口
 *
 * 接口说明：
 * 接口作用：客服订单推送接口
 *
 * @property-read string|null $union_code 平台ID，不能大于32个字符
 * @property-read string|null $companyid 公司ID，不能大于32个字符
 * @property-read string $order_number 订单编号，不能大于32个字符
 * @property-read string $cus_partnerid 下订单客户对接ID，不能大于32个字符
 * @property-read string $order_time 订单时间，格式：2019-09-25 15:49:33
 * @property-read float $order_money 订单金额，最大支持小数点后两位
 *
 * @method  ReceiveOrderData unionCode(?string $value) 平台ID，不能大于32个字符
 * @method  ReceiveOrderData companyid(?string $value) 公司ID，不能大于32个字符
 * @method  ReceiveOrderData orderNumber(string $value) 订单编号，不能大于32个字符
 * @method  ReceiveOrderData cusPartnerid(string $value) 下订单客户对接ID，不能大于32个字符
 * @method  ReceiveOrderData orderTime(string $value) 订单时间，格式：2019-09-25 15:49:33
 * @method  ReceiveOrderData orderMoney(float $value) 订单金额，最大支持小数点后两位
 * @package Ccwawamiya\Sobot\OnlineStatistics
 */
class ReceiveOrderData extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/chat-third/api/5/order/receive_order_data';
    }
}