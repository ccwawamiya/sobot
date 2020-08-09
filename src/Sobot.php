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

namespace MuCTS\Sobot;


use MuCTS\Sobot\Agents\Client as Agents;
use MuCTS\Sobot\Contracts\Container;
use MuCTS\Sobot\OnlineService\Client as OnlineService;
use MuCTS\Sobot\OnlineStatistics\Client as OnlineStatistics;
use MuCTS\Sobot\Robot\Client as Robot;
use MuCTS\Sobot\Tickets\Client as Tickets;
use MuCTS\Sobot\Token\Token;
use MuCTS\Sobot\Users\Client as Users;

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
 * @package MuCTS\Sobot
 */
class Sobot extends Container
{

}