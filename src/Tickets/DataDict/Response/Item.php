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

namespace Ccwawamiya\Sobot\Tickets\DataDict\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\Tickets\DataDict\Response\Item\AgentList;
use Ccwawamiya\Sobot\Tickets\DataDict\Response\Item\GroupList;
use Ccwawamiya\Sobot\Tickets\DataDict\Response\Item\TicketLevelList;
use Ccwawamiya\Sobot\Tickets\DataDict\Response\Item\TicketStatusList;
use Ccwawamiya\Sobot\Tickets\DataDict\Response\Item\TicketTypeList;

/**
 * Class Item
 * @property-read TicketTypeList[] $ticket_type_list 工单分类信息
 * @property-read TicketLevelList[] $ticket_level_list 工单优先级信息
 * @property-read TicketStatusList[] $ticket_status_list 工单状态信息
 * @property-read GroupList[] $group_list 技能组信息
 * @property-read AgentList[] $agent_list 坐席信息
 * @package Ccwawamiya\Sobot\Tickets\DataDict\Response
 */
class Item extends Response
{

}