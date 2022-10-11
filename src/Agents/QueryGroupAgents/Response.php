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

namespace Ccwawamiya\Sobot\Agents\QueryGroupAgents;

use Ccwawamiya\Sobot\Agents\QueryGroupAgents\Response\Items;

/**
 * Class Response
 * @property-read string $ret_code 返回编码
 * @property-read string $ret_msg 返回信息
 * @property-read Items[] $items 对象列表
 * @package Ccwawamiya\Sobot\Agents\QueryAgents
 */
class Response extends \Ccwawamiya\Sobot\Contracts\Response
{

}