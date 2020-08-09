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
 * Class QueryUserExtendFields
 * 查询客户自定义字段信息
 *
 * 接口说明：
 * 查询客户自定义字段配置信息
 *
 * 备注：
 * 1、此处查询为客户自定义字段配置信息，如需要获取某一个客户相对应的自定义字段值时需要请求独立接口。
 *
 * @package MuCTS\Sobot\Users
 */
class QueryUserExtendFields extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/query_user_extend_fields';
    }
}