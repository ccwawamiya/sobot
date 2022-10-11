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

namespace Ccwawamiya\Sobot\Call;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class QueryUsers
 * 查询通话记录列表
 *
 * 接口说明：
 * 查询通话记录列表
 *
 * @method QueryCallRecords whereCompanyid(string $value) 公司ID
 * @method QueryCallRecords whereAppid(string $value) 应用ID
 * @method QueryCallRecords whereServiceEmail(string $value) 版本5：service_email不会影响查询结果，版本6：service_emial不为空时会查询该座席的通话
 * @method QueryCallRecords whereStartTime(string $value) 开始时间（创建）,2018-07-10 00:00:00
 * @method QueryCallRecords whereEndTime(string $value) 结束时间（创建）,2018-07-10 23:59:59
 * @method QueryCallRecords whereCallDirection(string $value) 1.呼出0.呼入、11（咨询客服），12（咨询第三方），21(转接咨询)、22(转接客服)、23(转接第三方)，3(监听)、4(强插通话)、5(强拆通话)，call_direction为空时，默认为0
 * @method QueryCallRecords page(int $value) 起始页码 ,1
 * @method QueryCallRecords size(int $value) 每页条数 ,默认每页15条
 * @package Ccwawamiya\Sobot\Call
 */
class QueryCallRecords extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/comm-open/api/call/5/record';
    }
}