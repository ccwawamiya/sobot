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

namespace MuCTS\Sobot\Robot\RobotFeedback;

/**
 * Class Request
 * @property-write string $visitorid 访客id
 * @property-write string $cid 会话id
 * @property-write string $docid 词条id
 * @property-write string $doc_name 词条名称
 * @property-write int $robot_flag 机器人id
 * @property-write int $status 评价状态    1:顶，-1:踩
 * @property-write string $msgid 消息id
 * @property-write string|null $partnerid 企业自己的用户id，可自行传值
 * @property-write int $from 客户来源，0:开放平台；1:web、sdk；2:微信
 *
 * @method Request visitorid(string $value) 访客id
 * @method Request cid(string $value) 会话id
 * @method Request docid(string $value) 词条id
 * @method Request docName(string $value) 词条名称
 * @method Request robotFlag(int $value) 机器人id
 * @method Request status(int $value) 评价状态    1:顶，-1:踩
 * @method Request msgid(string $value) 消息id
 * @method Request partnerid(?string $value) 企业自己的用户id，可自行传值
 * @method Request from(int $value) 客户来源，0:开放平台；1:web、sdk；2:微信
 * @package MuCTS\Sobot\Robot\RobotFeedback
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}