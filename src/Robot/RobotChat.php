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

namespace MuCTS\Sobot\Robot;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class RobotChat
 * 用户咨询机器人
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口实现以用户的身份咨询机器人并获取答案。
 *
 * @property-write string $partnerid 企业自己的用户id，可自行传值
 * @property-write string $question 用户问题，示例参照表格下方详解
 * @property-write string|null $user_nick 用户昵称
 * @property-write int|null $source 用户渠道，0:pc,1:微信，2:app,3:微博，4:移动网站，9:企业微信，10:小程序
 * @property-write int|null $robot_flag 机器人编号
 * @property-write int|null $question_flag 问题类型，问题类型：点击-1，输入-0，多轮会话中点击-2
 * @property-write string|null $request_text 问题内容，questionFlag=0时，传入原问题； questionFlag=1时，传入docId； questionFlag=2时，示例参照表格下方详解
 *
 * @method  RobotChat partnerid(string $value) 企业自己的用户id，可自行传值
 * @method  RobotChat question(string $value) 用户问题，示例参照表格下方详解
 * @method  RobotChat userNick(?string $value) 用户昵称
 * @method  RobotChat source(?int $value) 用户渠道，0:pc, 1:微信，2:app, 3:微博，4:移动网站，9:企业微信，10:小程序
 * @method  RobotChat robotFlag(?int $value) 机器人编号
 * @method  RobotChat questionFlag(?int $value) 问题类型，问题类型：点击-1，输入-0，多轮会话中点击-2
 * @method  RobotChat requestText(?string $value) 问题内容，questionFlag = 0时，传入原问题； questionFlag = 1时，传入docId； questionFlag = 2时，示例参照表格下方详解
 *
 * @link https://www.sobot.com/developerdocs/service/knowledge_base.html#_2-3%E3%80%81%E7%94%A8%E6%88%B7%E5%92%A8%E8%AF%A2%E6%9C%BA%E5%99%A8%E4%BA%BA
 *
 * @package MuCTS\Sobot\Robot
 */
class RobotChat extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/robot_chat';
    }
}