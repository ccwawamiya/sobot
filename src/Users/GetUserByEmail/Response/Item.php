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

namespace MuCTS\Sobot\Users\GetUserByEmail\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\Users\GetUserByEmail\Response\Item\ExtendFieldValues;

/**
 * Class Item
 * @property-read string $userid 客户ID
 * @property-read string $user_nick 客户昵称
 * @property-read string $companyid 公司ID
 * @property-read string $user_emails 客户邮箱,此参数可能会采用英文分号";"隔开
 * @property-read string|null $user_name 客户名称
 * @property-read string|null $user_tels 手机号码，此参数可能会采用英文分号";"隔开
 * @property-read int|null $user_level 客户等级，0普通，1VIP
 * @property-read string|null $vip_level VIP级别，选项客户自定义
 * @property-read int|null $user_status 客户状态，0 普通，1 永久拉黑，默认0
 * @property-read string|null $partnerid 对接ID
 * @property-read string|null $enterpriseid 企业ID
 * @property-read string $enterprise_name 企业名称
 * @property-read string $create_agentid 创建者坐席ID
 * @property-read string $update_agentid 更新者者坐席ID
 * @property-read string|null $remark 备注
 * @property-read ExtendFieldValues[]|null $extend_field_values 扩展字段值
 * @property-read string $create_datetime 创建时间，2018-07-10 00:00:00
 * @property-read string|null $user_label 客户标签，选项客户自定义
 * @package MuCTS\Sobot\Users\GetUserByEmail\Response
 */
class Item extends Response
{

}