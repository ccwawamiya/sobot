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
 * Class UpdateUser
 * 编辑客户信息
 *
 * 接口说明：
 * 编辑客户信息
 *
 * 备注：
 * 1、如果企业设置了客户自定义字段，那么在更新客户信息时可以选择查询相对应的自定义字段配置信息进行扩展信息的添加。
 *
 * @property-write string $user_nick 客户昵称
 * @property-write string|null $user_name 客户名称
 * @property-write string|null $user_tels 手机号码，如多号码请采用英文分号";"隔开
 * @property-write string|null $user_emails 邮箱，如多邮箱请采用英文分号";"隔开
 * @property-write int|null $user_level 客户等级，0普通，1VIP
 * @property-write string|null $vip_level VIP级别，选项id，通过接口查询客户固定字段信息获取
 * @property-write string|null $user_label 客户标签，如多标签用英文分号";"隔开
 * @property-write int|null $user_status 客户状态，0 普通，1 永久拉黑，默认0
 * @property-write string|null $partnerid 对接ID
 * @property-write array|null $extend_field_params 扩展字段信息，格式：[["fieldid"=>"","扩展字段ID","field_value"=>"扩展字段值"]]
 * @property-write string|null $remark 备注
 *
 * @method UpdateUser userNick(string $value) 客户昵称
 * @method UpdateUser userName(?string $value) 客户名称
 * @method UpdateUser userTels(?string $value) 手机号码，如多号码请采用英文分号";"隔开
 * @method UpdateUser userEmails(?string $value) 邮箱，如多邮箱请采用英文分号";"隔开
 * @method UpdateUser userLevel(?int $value) 客户等级，0普通，1VIP
 * @method UpdateUser vipLevel(?string $value) VIP级别，选项id，通过接口查询客户固定字段信息获取
 * @method UpdateUser userLabel(?string $value) 客户标签，如多标签用英文分号";"隔开
 * @method UpdateUser userStatus(?int $value) 客户状态，0 普通，1 永久拉黑，默认0
 * @method UpdateUser partnerid(?string $value) 对接ID
 * @method UpdateUser extendFieldParams(?array $value) 扩展字段信息，格式：[["fieldid" => "", "扩展字段ID", "field_value" => "扩展字段值"]]
 * @method UpdateUser remark(?string $value) 备注
 *
 * @method UpdateUser whereUserid(string $value) 客户ID
 *
 * @package MuCTS\Sobot\Users
 */
class UpdateUser extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/crm/5/user/update_user';
    }
}