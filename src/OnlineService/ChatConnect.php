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

namespace MuCTS\Sobot\OnlineService;


use MuCTS\Sobot\Contracts\Sobot;

/**
 * Class ChatConnect
 *
 * 请求人工客服
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口以用户的身份来发起用户和客服之间的会话请求，并建立会话。
 *
 * @property-write string $partnerid 企业自己的用户id，可自行传值
 * @property-write int|null $source 客户来源,0-pc,1-微信，2-sdk,3-微博，4-h5
 * @property-write string|null $agentid 指定客服的id
 * @property-write int|null $tran_flag 是否必须转入指定客服，1-是，0-否
 * @property-write string|null $groupid 指定技能组
 * @property-write string|null $params 自定义参数
 * @property-write string|null $user_tels 用户电话
 * @property-write string|null $user_emails 用户邮箱
 * @property-write string|null $user_face 用户头像
 * @property-write string|null $user_name 用户真实姓名
 * @property-write string|null $user_nick 用户昵称
 * @property-write string|null $user_img 用户头像
 * 
 * @method ChatConnect partnerid(string $partnerid)	String	是	企业自己的用户id，可自行传值
 * @method ChatConnect source(?int $source) 客户来源,0-pc,1-微信，2-sdk,3-微博，4-h5
 * @method ChatConnect agentid(?string $agentid) 指定客服的id
 * @method ChatConnect tranFlag(?int $tranFlag) 是否必须转入指定客服，1-是，0-否
 * @method ChatConnect groupid(?string $groupid) 指定技能组
 * @method ChatConnect params(?string $params) 自定义参数
 * @method ChatConnect userTels(?string $userTels) 用户电话
 * @method ChatConnect userEmails(?string $userEmails) 用户邮箱
 * @method ChatConnect userFace(?string $userFace) 用户头像
 * @method ChatConnect userName(?string $userName) 用户真实姓名
 * @method ChatConnect userNick(?string $userNick) 用户昵称
 * @method ChatConnect userImg(?string $userImg) 用户头像
 * @package MuCTS\Sobot\OnlineService
 */
class ChatConnect extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/chat_connect';
    }
}