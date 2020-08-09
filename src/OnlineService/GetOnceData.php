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

namespace MuCTS\Sobot\OnlineService;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class GetOnceData
 *
 * 查询客服实时数据
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来获取当前登录的在线客服的列表以及状态等信息。
 *
 * @package MuCTS\Sobot\OnlineService
 */
class GetOnceData extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/get_once_data';
    }
}