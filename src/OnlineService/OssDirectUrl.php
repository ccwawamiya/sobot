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
 * Class DirectUrl
 * 单点登录接口
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来获取一个临时的URL，通过访问该URL即可直接进入某账号的智齿客服后台，从而实现单点登录的业务。
 *
 * @property-write string $agent_email 客服邮箱
 * @property-write int type 登录页面，1:旧版工作台，2:新版工作台，如果不传，返回的页面链接是智齿管理后台页面
 *
 * @method OssDirectUrl agentEmail(string $value) 客服邮箱
 * @method OssDirectUrl type(int $value) 登录页面，1:旧版工作台，2:新版工作台，如果不传，返回的页面链接是智齿管理后台页面
 *
 * @package MuCTS\Sobot\OnlineService
 */
class OssDirectUrl extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/oss/5/direct_url';
    }
}