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

namespace Ccwawamiya\Sobot\OnlineService\ChatSend;


/**
 * Class Request
 *
 * @property-write string  $partnerid  企业自己的用户id，可自行传值
 * @property-write string $content  用户问题
 * @property-write string|null $msg_type  消息类型 （text,image,voice，默认为text纯文本，如果为image和voice的时候，content传递图片地址或者音频地址,其中音频支持mp3,wav两种格式）
 *
 * @method Request partnerid(string $partnerid)  企业自己的用户id，可自行传值
 * @method Request content(string $content)  用户问题
 * @method Request msgType(string $msgType)  消息类型 （text,image,voice，默认为text纯文本，如果为image和voice的时候，content传递图片地址或者音频地址,其中音频支持mp3,wav两种格式）
 *
 * @package Ccwawamiya\Sobot\OnlineService\ChatSend
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}