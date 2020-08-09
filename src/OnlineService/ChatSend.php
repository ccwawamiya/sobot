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
 * Class ChatSend
 * 客户咨询客服
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口以用户的身份给客服发送消息。
 *
 * @property-write string  $partnerid  企业自己的用户id，可自行传值
 * @property-write string $content  用户问题
 * @property-write string|null $msg_type  消息类型 （text,image,voice，默认为text纯文本，如果为image和voice的时候，content传递图片地址或者音频地址,其中音频支持mp3,wav两种格式）
 *
 * @method ChatSend partnerid(string $partnerid)  企业自己的用户id，可自行传值
 * @method ChatSend content(string $content)  用户问题
 * @method ChatSend msgType(string $msgType)  消息类型 （text,image,voice，默认为text纯文本，如果为image和voice的时候，content传递图片地址或者音频地址,其中音频支持mp3,wav两种格式）
 *
 * @package MuCTS\Sobot\OnlineService
 */
class ChatSend extends Sobot
{
    const MSG_TYPE_TEXT = 'text';
    const MSG_TYPE_IMAGE = 'image';
    const MSG_TYPE_VOICE = 'voice';

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/chat_send';
    }
}