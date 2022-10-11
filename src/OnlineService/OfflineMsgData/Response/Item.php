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

namespace Ccwawamiya\Sobot\OnlineService\OfflineMsgData\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\OnlineService\OfflineMsgData\Response\Item\MsgData;

/**
 * Class Item
 * @property-read int $size 离线消息数
 * @property-read MsgData[] $msg_data 客服列表及对应客服发送的消息列表
 * @package Ccwawamiya\Sobot\OnlineService\OfflineMsgData\Response
 */
class Item extends Response
{

}