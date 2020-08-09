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

namespace MuCTS\Sobot\Agents\UpdateAgent;

use MuCTS\Sobot\Agents\UpdateAgent\Response\Item;

/**
 * Class Response
 * @property-read string $ret_code 返回编码
 * @property-read string $ret_msg 返回信息
 * @property-read Item $item 返回对象
 * @package MuCTS\Sobot\Agents\UpdateAgent
 */
class Response extends \MuCTS\Sobot\Contracts\Request
{

}