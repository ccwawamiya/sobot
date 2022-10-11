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
 * Class QueryCIds
 * 查询客户会话记录
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取某条会话的详细会话记录。
 *
 * 说明：
 * 1)cid,visitorid,partnerid+from为三种查询模式，优先级为：cid > visitorid > partnerid+from;
 * 2)传入visitorid或者partnerid+from时，表示查询用户的最后一次会话记录。
 *
 * @method GetDetailByCId whereCid(string $value) 会话id
 * @method GetDetailByCId wherePartnerid(?string $value) 企业自己的用户id-供开放平台用户使用
 * @method GetDetailByCId whereFrom(?int $value) 来源：0-开放平台，1-pc/h5/sdk
 * @method GetDetailByCId whereVisitorid(?string $value) 智齿平台用户id-所有来源用户都可使用
 * @method GetDetailByCId whereNameFlag(?int $value) 客服名字类型：0.昵称（默认） 1.真实姓名
 *
 * @link https://www.sobot.com/developerdocs/service/online_service.html#_2-9%E3%80%81%E6%9F%A5%E8%AF%A2%E5%AE%A2%E6%88%B7%E4%BC%9A%E8%AF%9D%E8%AE%B0%E5%BD%95
 * @package Ccwawamiya\Sobot\OnlineService
 */
class GetDetailByCId extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/get_detail_by_cid';
    }
}