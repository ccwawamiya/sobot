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
 * Class AddRobotDoc
 * 添加知识库词条
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来添加一个知识条目。
 *
 * @property-write int $robot_flag 知识库所属机器人：0公共知识库，1机器人一
 * @property-write string $question_title 标准问题
 * @property-write int $match_flag 匹配模式：0智能匹配，1完全匹配，2包含匹配
 * @property-write string $answer_desc 知识库配置的答案内容，格式为HTML
 * @property-write string $question_typeid 词条分类id
 * @property-write int $used_flag 词条状态：0开启，1停用
 * @property-write int $audit_status 有效状态：1永久有效；2指定时间有效
 * @property-write string|null $effect_time 生效时间，格式：yyyy-MM-dd HH:mm:ss
 * @property-write string|null $invalid_time 失效时间，格式：yyyy-MM-dd HH:mm:ss
 *
 * @method  AddRobotDoc robotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method  AddRobotDoc questionTitle(string $value) 标准问题
 * @method  AddRobotDoc matchFlag(int $value) 匹配模式：0智能匹配，1完全匹配，2包含匹配
 * @method  AddRobotDoc answerDesc(string $value) 知识库配置的答案内容，格式为HTML
 * @method  AddRobotDoc questionTypeid(string $value) 词条分类id
 * @method  AddRobotDoc usedFlag(int $value) 词条状态：0开启，1停用
 * @method  AddRobotDoc auditStatus(int $value) 有效状态：1永久有效；2指定时间有效
 * @method  AddRobotDoc effectTime(string $value) 生效时间，格式：yyyy-MM-dd HH:mm:ss
 * @method  AddRobotDoc invalidTime(string $value) 失效时间，格式：yyyy-MM-dd HH:mm:ss
 *
 * @package MuCTS\Sobot\Robot
 */
class AddRobotDoc extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/add_robot_doc';
    }
}