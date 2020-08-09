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
 * Class SearchDocList
 * 查询知识库词条列表
 *
 * 接口说明：
 * 接口类型：主动调用接口。
 * 接口作用：可通过调用该接口来查询某个知识库所有知识条目的列表。
 *
 * @method SearchDocList whereKeyFlag(string $value) 1问题，2答案
 * @method SearchDocList whereQuestionTypeid(int $value) 词条类型（传-1）
 * @method SearchDocList whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method SearchDocList whereQuestionTypeFlag(int $value) 问题类型，1-全部问题，2-标准问题，3-相似问题
 * @method SearchDocList pageNo(int $value) 当前页码
 * @method SearchDocList whereKeyWords(?string $value) 搜索关键字
 * @method SearchDocList whereUsedFlag(?int $value) 词条状态，0启用，1手动停用，2系统停用，3过期停用
 * @method SearchDocList whereLinkFlag(?int $value)  是否有关联问题，0是，1否
 * @method SearchDocList whereAnswerFlag(?int $value)  答案类型:1文本，2图片，3图文，4视频
 * @method SearchDocList whereCreateid(?string $value)  词条创建人ID
 * @method SearchDocList whereCreateStartTime(?string $value) 创建开始时间
 * @method SearchDocList whereCreateEndTime(?string $value) 创建结束时间
 * @method SearchDocList whereUpdateid(?string $value) 词条最后更新人ID
 * @method SearchDocList whereUpdateStartDate(?string $value) 更新开始时间
 * @method SearchDocList whereUpdateEndDate(?string $value) 更新结束时间
 * @method SearchDocList whereEffectStartDate(?string $value) 生效开始时间
 * @method SearchDocList whereEffectEndDate(?string $value) 生效结束时间
 * @method SearchDocList whereInvalidStartDate(?string $value) 失效开始时间
 * @method SearchDocList whereInvalidEndDate(?string $value) 失效结束时间
 * @package MuCTS\Sobot\Robot
 */
class SearchDocList extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/robot/5/search_doc_list';
    }
}