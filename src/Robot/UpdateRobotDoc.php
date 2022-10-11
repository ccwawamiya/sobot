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

namespace Ccwawamiya\Sobot\Robot;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class UpdateRobotDoc
 * 修改知识库词条
 *
 * 接口说明：
 * 接口类型：主动调用接口
 * 接口作用：可通过调用该接口来进行某个知识条目的修改操作。
 *
 * @property-write int $robot_flag 知识库所属机器人：0公共知识库，1机器人一
 * @property-write string $questionid 问题id
 * @property-write string $question_title 标准问题
 * @property-write int $match_flag 匹配模式：0智能匹配，1完全匹配，2包含匹配
 * @property-write string $answerid 答案id
 * @property-write string $answer_desc 知识库配置的答案内容，格式为HTML
 * @property-write string $question_typeid 词条分类id
 * @property-write int $used_flag 词条状态：0开启，1停用
 * @property-write int $audit_status 有效状态：1永久有效；2指定时间有效
 * @property-write string|null $effect_time 生效时间，格式：yyyy-MM-dd HH:mm:ss
 * @property-write string|null $invalid_time 失效时间，格式：yyyy-MM-dd HH:mm:ss
 *
 * @method UpdateRobotDoc whereDocid(string $value) 词条id
 * @method UpdateRobotDoc robotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method UpdateRobotDoc questionid(string $value) 问题id
 * @method UpdateRobotDoc questionTitle(string $value) 标准问题
 * @method UpdateRobotDoc matchFlag(int $value) 匹配模式：0智能匹配，1完全匹配，2包含匹配
 * @method UpdateRobotDoc answerid(string $value) 答案id
 * @method UpdateRobotDoc answerDesc(string $value) 知识库配置的答案内容，格式为HTML
 * @method UpdateRobotDoc questionTypeid(string $value) 词条分类id
 * @method UpdateRobotDoc usedFlag(int $value) 词条状态：0开启，1停用
 * @method UpdateRobotDoc auditStatus(int $value) 有效状态：1永久有效；2指定时间有效
 * @method UpdateRobotDoc effectTime(string $value) 生效时间，格式：yyyy-MM-dd HH:mm:ss
 * @method UpdateRobotDoc invalidTime(string $value) 失效时间，格式：yyyy-MM-dd HH:mm:ss
 *
 * @package Ccwawamiya\Sobot\Robot
 */
class UpdateRobotDoc extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/update_robot_doc';
    }
}