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


use Ccwawamiya\Sobot\Contracts\Container;

/**
 * Class Client
 * @method CustomerSession customerSession() 客户会话统计
 * @method ExportData exportData() 离线数据文件下载接口
 * @method HumanSatisfaction humanSatisfaction() 人工满意度统计
 * @method HumanSession humanSession() 人工会话统计
 * @method MessageStats messageStats() 会话消息统计
 * @method QualityResult qualityResult() 获取在线质检结果
 * @method ReceiveOrderData receiveOrderData() 订单统计推送接口
 * @method RobotSatisfaction robotSatisfaction() 机器人满意度统计
 * @method RobotSession robotSession() 机器人会话统计
 * @package Ccwawamiya\Sobot\OnlineStatistics
 */
class Client extends Container
{

}