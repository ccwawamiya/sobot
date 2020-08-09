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

namespace MuCTS\Sobot\Users;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class GetUserByEmail
 * 根据邮箱查询客户信息
 *
 * 接口说明：
 * 根据邮箱查询客户信息
 *
 * @method GetUserByEmail whereUserEmails(string $value) 客户邮箱，此参数只允许单一值
 *
 * @package MuCTS\Sobot\Users
 */
class GetUserByEmail extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/get_user_by_email';
    }
}