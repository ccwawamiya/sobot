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

namespace MuCTS\Sobot\Tickets\SaveUserReply;

/**
 * Class Request
 * @property-write string $ticketid 工单ID
 * @property-write string $reply_content 工单回复内容
 * @property-write string $file_str 回复附件路径，多个附件，附件之间采用英文分号";"隔开
 *
 * @method Request ticketid($ticketid) 工单ID
 * @method Request replyContent($replyContent) 工单回复内容
 * @method Request fileStr($fileStr) 回复附件路径，多个附件，附件之间采用英文分号";"隔开
 * @package MuCTS\Sobot\Tickets\SaveUserReply
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}