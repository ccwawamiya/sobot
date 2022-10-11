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

namespace Ccwawamiya\Sobot\Call\QueryCallRecords;


/**
 * Class Request
 * @method Request whereCompanyid(string $value) 公司ID
 * @method Request whereAppid(string $value) 应用ID
 * @method Request whereServiceEmail(string $value) 版本5：service_email不会影响查询结果，版本6：service_emial不为空时会查询该座席的通话
 * @method Request whereStartTime(string $value) 开始时间（创建）,2018-07-10 00:00:00
 * @method Request whereEndTime(string $value) 结束时间（创建）,2018-07-10 23:59:59
 * @method Request whereCallDirection(string $value) 1.呼出0.呼入、11（咨询客服），12（咨询第三方），21(转接咨询)、22(转接客服)、23(转接第三方)，3(监听)、4(强插通话)、5(强拆通话)，call_direction为空时，默认为0
 * @method Request page(int $value) 起始页码 ,1
 * @method Request size(int $value) 每页条数 ,默认每页15条
 * @package Ccwawamiya\Sobot\Call\QueryCallRecords
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}