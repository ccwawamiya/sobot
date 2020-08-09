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

namespace MuCTS\Sobot\OnlineService\Comment;

/**
 * Class Request
 * @property-write string $partnerid  企业自己的用户id，可自行传值
 * @property-write int|null $type  评价类型：0：评价机器人，1：评价人工
 * @property-write int|null $solved  评价结果：0：未解决，1：已解决
 * @property-write int|null $score  人工评价分数（1,2,3,4,5）
 * @property-write string $tag  评价标签，多个用逗号分隔
 * @property-write string $remark  评价内容
 * @property-write int|null $comment_type  评价类型：0-邀请评价，1-主动评价
 *
 * @method Request partnerid(string $partnerid)  企业自己的用户id，可自行传值
 * @method Request type(int $type)  评价类型：0：评价机器人，1：评价人工
 * @method Request solved(int $solved) 评价结果：0：未解决，1：已解决
 * @method Request score(?int $score) 人工评价分数（1, 2, 3, 4, 5）
 * @method Request tag(?string $tag) 评价标签，多个用逗号分隔
 * @method Request remark(?string $remark)  评价内容
 * @method Request commentType(?string $commentType)  评价类型：0-邀请评价，1-主动评价
 * @package MuCTS\Sobot\OnlineService\Comment
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}