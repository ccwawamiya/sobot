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

namespace Ccwawamiya\Sobot\Users\QueryUsers;

/**
 * Class Request
 * @method Request whereUserNick(string $value) 客户昵称
 * @method Request whereUserTels(string $value) 手机号码, 此参数只允许单一值
 * @method Request whereUserEmails(string $value) 邮箱, 此参数只允许单一值
 * @method Request whereUserStatus(int $value) 客户状态, 0 普通，1 永久拉黑，默认0
 * @method Request whereEnterpriseid(string $value) 企业ID, 可根据企业列表接口中获取企业ID
 * @method Request whereStartDatetime(string $value) 开始时间（创建）, 2018-07-10 00:00:00
 * @method Request whereEndDatetime(string $value) 结束时间（创建）, 2018-07-10 23:59:59
 * @method Request pageNo(int $value) 起始页码, 1
 * @method Request pageSize(int $value) 每页条数, 默认每页15条
 * @package Ccwawamiya\Sobot\Users\QueryUsers
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}