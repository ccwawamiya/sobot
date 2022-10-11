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

namespace Ccwawamiya\Sobot\OnlineStatistics\MessageStats\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $total_message 总会话消息数
 * @property-read int $robot_message 机器人消息数
 * @property-read int $total_customer_message 客户消息数
 * @property-read int $service_message 客服消息数
 * @property-read float $avg_message 平均每会话消息数
 * @property-read float $avg_customer_message 平均每会话客户消息数
 * @property-read float $avg_service_messge 平均每会话客服消息数
 * @property-read int $customer_to_robot_message 客户消息数
 * @property-read float $robot_avg_message 平均每会话消息数
 * @property-read float $robot_avg_customer_message 平均每会话客户消息数
 * @property-read int $total_human_message 总人工会话消息数
 * @property-read int $customer_to_service_message 客户消息数
 * @property-read string $answer_than 答问比
 * @property-read float $human_avg_message 平均每会话消息数
 * @property-read float $human_avg_customer_message 平均每会话客户消息数
 * @property-read float $human_avg_service_message 平均每会话客服消息数
 * @property-read int $service_word 客服字数
 * @property-read float $avg_service_word 平均每会话客服字数
 * @property-read int $service_offline_num 客服离线消息数
 * @package Ccwawamiya\Sobot\OnlineStatistics\MessageStats\Response
 */
class Item extends Response
{

}