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

namespace MuCTS\Sobot\OnlineService\QueryCIds;

/**
 * Class Request
 * @method Request whereVisitorid(?string $value) 访客id，visitorid与partnerid选择其一
 * @method Request wherePartnerid(?string $value) 企业自己的用户id，可自行传值，与from参数配套使用
 * @method Request whereFrom(?int $value) 来源：0-开放平台，1-pc/h5/sdk
 * @package MuCTS\Sobot\OnlineService\QueryCIds
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}