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

namespace Ccwawamiya\Sobot;


use Ccwawamiya\Sobot\Agents\Client as Agents;
use Ccwawamiya\Sobot\Contracts\Container;
use Ccwawamiya\Sobot\OnlineService\Client as OnlineService;
use Ccwawamiya\Sobot\OnlineStatistics\Client as OnlineStatistics;
use Ccwawamiya\Sobot\Robot\Client as Robot;
use Ccwawamiya\Sobot\Tickets\Client as Tickets;
use Ccwawamiya\Sobot\Token\Token;
use Ccwawamiya\Sobot\Users\Client as Users;
use Ccwawamiya\Sobot\Call\Client as Call;

/**
 * Class Sobot
 *
 * @method Token token() 获取Token
 * @method Users users() 客户中心
 * @method Agents agents() 客服管理
 * @method OnlineService onlineService() 在线客服
 * @method OnlineStatistics onlineStatistics() 在线统计
 * @method Robot robot() 机器人&知识库
 * @method Tickets tickets() 工单中心
 * @method Call call() 呼叫中心
 * @package Ccwawamiya\Sobot
 */
class Sobot extends Container
{

}