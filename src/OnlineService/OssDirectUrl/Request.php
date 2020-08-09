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

namespace MuCTS\Sobot\OnlineService\OssDirectUrl;

/**
 * Class Request
 *
 * @property-write string $agent_email 客服邮箱
 * @property-write int type 登录页面，1:旧版工作台，2:新版工作台，如果不传，返回的页面链接是智齿管理后台页面
 *
 * @method Request agentEmail(string $value) 客服邮箱
 * @method Request type(int $value) 登录页面，1:旧版工作台，2:新版工作台，如果不传，返回的页面链接是智齿管理后台页面
 *
 * @package MuCTS\Sobot\OnlineService\OssDirectUrl
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}