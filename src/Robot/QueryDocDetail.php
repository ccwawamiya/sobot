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
 * Class QueryDocDetail
 * 查询知识库词条
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来查询某个知识条目的详细信息。
 *
 * @method QueryDocDetail whereDocid(string $value) 词条Id
 * @method QueryDocDetail whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 *
 * @package MuCTS\Sobot\Robot
 */
class QueryDocDetail extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/query_doc_detail';
    }
}