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

/***
 * Class AdminIsWork
 * 查询客服上下班时间
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取某个在线客服组当前是否处于系统设置的上班时间或下 班时间。
 *
 * @method AdminIsWork whereGroupid(?string $value) 技能组id
 *
 * @package Ccwawamiya\Sobot\OnlineService
 */
class AdminIsWork extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/admin_is_work';
    }
}