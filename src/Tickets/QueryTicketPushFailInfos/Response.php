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

namespace MuCTS\Sobot\Tickets\QueryTicketPushFailInfos;

use MuCTS\Sobot\Tickets\QueryTicketPushFailInfos\Response\Items;

/**
 * Class Response
 * @property-read string $ret_code
 * @property-read string $ret_msg
 * @property-read int $page_no 当前页数
 * @property-read int $page_size 当前页显示条数
 * @property-read int $page_count 总页数
 * @property-read int $total_count 总条数
 * @property-read Items[] $items 返回集合
 * @package MuCTS\Sobot\Tickets\QueryTicketPushFailInfos
 */
class Response extends \MuCTS\Sobot\Contracts\Response
{

}