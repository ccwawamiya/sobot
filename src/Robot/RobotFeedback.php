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

namespace Ccwawamiya\Sobot\Robot;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class RobotFeedback
 * 机器人回答评价
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：通过主动调用接口来进行机器人回答的评价（非会话评价）。
 *
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
 * @method RobotFeedback visitorid(string $value) 访客id
 * @method RobotFeedback cid(string $value) 会话id
 * @method RobotFeedback docid(string $value) 词条id
 * @method RobotFeedback docName(string $value) 词条名称
 * @method RobotFeedback robotFlag(int $value) 机器人id
 * @method RobotFeedback status(int $value) 评价状态    1:顶，-1:踩
 * @method RobotFeedback msgid(string $value) 消息id
 * @method RobotFeedback partnerid(?string $value) 企业自己的用户id，可自行传值
 * @method RobotFeedback from(int $value) 客户来源，0:开放平台；1:web、sdk；2:微信
 *
 * 注：如没有visitorid,可传入partnerid、from三个字段代替
 *
 * @package Ccwawamiya\Sobot\Robot
 */
class RobotFeedback extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/robot_feedback';
    }
}