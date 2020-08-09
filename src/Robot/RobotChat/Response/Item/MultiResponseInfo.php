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

namespace MuCTS\Sobot\Robot\RobotChat\Response\Item;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class MultiResponseInfo
 * @property-read string $remind_question 机器人提示问题
 * @property-read string $answer_strip 答案引导语
 * @property-read string[] $interface_ret_list 接口返回列表
 * @property-read string $input_content_list 自定义列表内容，多个以逗号隔开
 * @property-read string $output_param_list 下轮会话入参，多个以##隔开
 * @property-read int $level 轮次
 * @property-read string $level_name 轮次名称
 * @property-read string $question 原始问题
 * @property-read string $answer 答案
 * @property-read string $ret_code 调用接口返回码
 * @property-read string $ret_error_msg 调用接口返回说明
 * @property-read string $docid 推荐问题的词条Id
 * @property-read string $conversationid 多轮会话id
 * @property-read int $template 模板id
 * @property-read string $end_flag 多轮会话结束标记
 * @package MuCTS\Sobot\Robot\RobotChat\Response\Item
 */
class MultiResponseInfo extends Response
{

}