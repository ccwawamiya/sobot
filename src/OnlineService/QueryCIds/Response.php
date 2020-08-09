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

use MuCTS\Sobot\OnlineService\QueryCIds\Response\Items;

/**
 * Class Response
 * @property-read string $ret_code
 * @property-read string $ret_msg
 * @property-read Items[] $item 对象列表
 * @package MuCTS\Sobot\OnlineService\QueryCIds
 */
class Response extends \MuCTS\Sobot\Contracts\Response
{

}