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
 * Class QueryUsers
 * 查询客户列表
 *
 * 接口说明：
 * 查询客户列表
 *
 * @method QueryUsers whereUserNick(string $value) 客户昵称
 * @method QueryUsers whereUserTels(string $value) 手机号码 ,此参数只允许单一值
 * @method QueryUsers whereUserEmails(string $value) 邮箱 ,此参数只允许单一值
 * @method QueryUsers whereUserStatus(int $value) 客户状态 ,0 普通，1 永久拉黑，默认0
 * @method QueryUsers whereEnterpriseid(string $value) 企业ID ,可根据企业列表接口中获取企业ID
 * @method QueryUsers whereStartDatetime(string $value) 开始时间（创建）,2018-07-10 00:00:00
 * @method QueryUsers whereEndDatetime(string $value) 结束时间（创建）,2018-07-10 23:59:59
 * @method QueryUsers pageNo(int $value) 起始页码 ,1
 * @method QueryUsers pageSize(int $value) 每页条数 ,默认每页15条
 * @package Ccwawamiya\Sobot\Users
 */
class QueryUsers extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/query_users';
    }
}