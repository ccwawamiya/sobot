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


use MuCTS\Sobot\Contracts\Container;

/**
 * Class Client
 * @method GetUserByEmail getUserByEmail() 根据邮箱查询客户信息
 * @method GetUserById getUserById() 根据客户ID查询客户信息
 * @method GetUserByPartnerId getUserByPartnerId() 根据对接ID查询客户信息
 * @method GetUserByTel getUserByTel() 根据手机号查询客户信息
 * @method QueryEnterprises queryEnterprises() 查询客户中心企业列表
 * @method QueryUserExtendFields queryUserExtendFields() 查询客户自定义字段配置信息
 * @method QueryUserExtendFieldValues queryUserExtendFieldValues() 查询自定义字段值
 * @method QueryUserFixedExtendFields queryUserFixedExtendFields() 查询客户固定字段信息
 * @method QueryUsers queryUsers() 查询客户列表
 * @method SaveUser saveUser() 创建客户信息
 * @method UpdateUser updateUser() 编辑客户信息
 *
 * @package MuCTS\Sobot\Users
 */
class Client extends Container
{

}