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

namespace Ccwawamiya\Sobot\OnlineService;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class Out
 * 客户结束会话
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来结束某个用户当前的会话。
 *
 * @property-write string $partnerid 企业自己的用户id，可自行传值
 * @method Out partnerid(string $partnerid) 企业自己的用户id，可自行传值
 * @package Ccwawamiya\Sobot\OnlineService
 */
class Out extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/out';
    }
}