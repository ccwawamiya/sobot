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
 * Class Comment
 * 客户评价
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口执行用户对会话进行满意度评价。
 *
 * @property-write string $partnerid  企业自己的用户id，可自行传值
 * @property-write int|null $type  评价类型：0：评价机器人，1：评价人工
 * @property-write int|null $solved  评价结果：0：未解决，1：已解决
 * @property-write int|null $score  人工评价分数（1,2,3,4,5）
 * @property-write string $tag  评价标签，多个用逗号分隔
 * @property-write string $remark  评价内容
 * @property-write int|null $comment_type  评价类型：0-邀请评价，1-主动评价
 *
 * @method Comment partnerid(string $partnerid)  企业自己的用户id，可自行传值
 * @method Comment type(int $type)  评价类型：0：评价机器人，1：评价人工
 * @method Comment solved(int $solved) 评价结果：0：未解决，1：已解决
 * @method Comment score(?int $score) 人工评价分数（1, 2, 3, 4, 5）
 * @method Comment tag(?string $tag) 评价标签，多个用逗号分隔
 * @method Comment remark(?string $remark)  评价内容
 * @method Comment commentType(?string $commentType)  评价类型：0-邀请评价，1-主动评价
 *
 * @package MuCTS\Sobot\OnlineService
 */
class Comment extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/chat/5/user/comment';
    }
}