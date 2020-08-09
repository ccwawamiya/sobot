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
 * Class QueryEnterprises
 * 查询客户中心企业列表
 *
 * 接口说明：
 * 查询客户中心的企业列表
 *
 * @method QueryEnterprises pageNo(int $value) 起始页码 ,1
 * @method QueryEnterprises pageSize(int $value) 每页条数 ,默认每页15条
 *
 * @package MuCTS\Sobot\Users
 */
class QueryEnterprises extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/query_enterprises';
    }
}