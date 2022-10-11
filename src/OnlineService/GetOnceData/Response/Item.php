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

namespace Ccwawamiya\Sobot\OnlineService\GetOnceData\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\OnlineService\GetOnceData\Response\Item\AdminList;

/**
 * Class Item
 * @property-read AdminList[] $admin_list 在线客服列表，详见下文
 * @property-read int $admin_size 在线客服数量
 * @property-read int online_user_size 在线用户数量
 * @property-read int wait_user_size 排队用户数量
 * @property-read int robot_user_size 与机器人会话数量
 * @package Ccwawamiya\Sobot\OnlineService\GetOnceData\Response
 */
class Item extends Response
{

}