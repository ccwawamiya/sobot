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
 * Class SearchQuestionTypeList
 * 查询知识库分类列表
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来查询某个知识库中的分类。
 *
 * @method SearchQuestionTypeList whereParentTypeid(string $value) 父级分类id，顶级分类id-1
 * @method SearchQuestionTypeList whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method SearchQuestionTypeList whereTypeFlag(?int $value) 分类类型：1-单轮问题分类(默认)；2-多轮问题分类
 *
 * @package MuCTS\Sobot\Robot
 */
class SearchQuestionTypeList extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/search_question_type_list';
    }
}