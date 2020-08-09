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
 * Class QueryUserExtendFieldValues
 * 查询自定义字段值
 *
 * 接口说明：
 * 返回自定义字段结果值信息，用于数据展示。
 *
 * @method QueryUserExtendFieldValues whereUserid(string $value) 客户ID
 *
 * @package MuCTS\Sobot\Users
 */
class QueryUserExtendFieldValues extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/query_user_extend_field_values';
    }
}