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

namespace Ccwawamiya\Sobot\Users;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class QueryUserFixedExtendFields
 * 查询客户固定字段信息
 *
 * 接口说明：
 * 查询客户固定字段配置信息
 * 备注：
 * 1、此处查询为客户固定字段配置信息，例如，VIP级别。
 *
 * @package Ccwawamiya\Sobot\Users
 */
class QueryUserFixedExtendFields extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/query_user_fixed_extend_fields';
    }
}