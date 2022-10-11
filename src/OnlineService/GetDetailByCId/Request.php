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

namespace Ccwawamiya\Sobot\OnlineService\GetDetailByCId;


/**
 * Class Request
 * @method Request whereCid(string $value) 会话id
 * @method Request wherePartnerid(?string $value) 企业自己的用户id-供开放平台用户使用
 * @method Request whereFrom(?int $value) 来源：0-开放平台，1-pc/h5/sdk
 * @method Request whereVisitorid(?string $value) 智齿平台用户id-所有来源用户都可使用
 * @method Request whereNameFlag(?int $value) 客服名字类型：0.昵称（默认） 1.真实姓名
 * @package Ccwawamiya\Sobot\OnlineService\QueryCIds
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}