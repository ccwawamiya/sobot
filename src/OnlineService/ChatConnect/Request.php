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

namespace Ccwawamiya\Sobot\OnlineService\ChatConnect;

/**
 * Class Request
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
 * @method  Request partnerid(string $partnerid)	String	是	企业自己的用户id，可自行传值
 * @method  Request source(?int $source) 客户来源,0-pc,1-微信，2-sdk,3-微博，4-h5
 * @method  Request agentid(?string $agentid) 指定客服的id
 * @method  Request tranFlag(?int $tranFlag) 是否必须转入指定客服，1-是，0-否
 * @method  Request groupid(?string $groupid) 指定技能组
 * @method  Request params(?string $params) 自定义参数
 * @method  Request userTels(?string $userTels) 用户电话
 * @method  Request userEmails(?string $userEmails) 用户邮箱
 * @method  Request userFace(?string $userFace) 用户头像
 * @method  Request userName(?string $userName) 用户真实姓名
 * @method  Request userNick(?string $userNick) 用户昵称
 * @method  Request userImg(?string $userImg) 用户头像
 * @package Ccwawamiya\Sobot\OnlineService\ChatConnect\Request
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}