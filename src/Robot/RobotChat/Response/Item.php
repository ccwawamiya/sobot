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

namespace MuCTS\Sobot\Robot\RobotChat\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\Robot\RobotChat\Response\Item\MultiResponseInfo;
use MuCTS\Sobot\Robot\RobotChat\Response\Item\Suggestions;

/**
 * Class Item
 * @property-read  string $answer 答案
 * @property-read  Suggestions[] $suggestions 推荐问题列表，详见下文
 * @property-read  string $question 原始问题 词条名称
 * @property-read  string $docid 词条id
 * @property-read  string $visitorid 用户id
 * @property-read  string $cid 会话id
 * @property-read  string $msgid 消息体id
 * @property-read  string $stripe 问题推荐引导语
 * @property-read  string $robot_flag 机器人编号
 * @property-read  string $answer_type 机器人回答类型
 * @property-read  string $session_new 是否是新会话 true:是，false:不是
 * @property-read  int $transfer_type 触发转人工类型 0:不触发，1:重复提问，2:负向情绪，3:命中关键字
 * @property-read  string $transfer_type_cn 触发转人工类型
 * @property-read  MultiResponseInfo $multi_response_info 多轮会话返回数据
 * @package MuCTS\Sobot\Robot\RobotChat\Response
 */
class Item extends Response
{
    /**
     * 触发转人工类型
     * @return string
     */
    public function getTransferTypeCn()
    {
        $transferType = intval($this->transfer_type);
        switch ($transferType) {
            case 0:
                return '不触发';
            case 1:
                return '重复提问';
            case 2:
                return '负向情绪';
            case 3:
                return '命中关键字';
            default:
                return '未知';
        }
    }
}