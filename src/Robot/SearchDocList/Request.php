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

namespace MuCTS\Sobot\Robot\SearchDocList;

/**
 * Class Request
 * @method Request whereKeyFlag(string $value) 1问题，2答案
 * @method Request whereQuestionTypeid(int $value) 词条类型（传-1）
 * @method Request whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method Request whereQuestionTypeFlag(int $value) 问题类型，1-全部问题，2-标准问题，3-相似问题
 * @method Request pageNo(int $value) 当前页码
 * @method Request whereKeyWords(?string $value) 搜索关键字
 * @method Request whereUsedFlag(?int $value) 词条状态，0启用，1手动停用，2系统停用，3过期停用
 * @method Request whereLinkFlag(?int $value)  是否有关联问题，0是，1否
 * @method Request whereAnswerFlag(?int $value)  答案类型:1文本，2图片，3图文，4视频
 * @method Request whereCreateid(?string $value)  词条创建人ID
 * @method Request whereCreateStartTime(?string $value) 创建开始时间
 * @method Request whereCreateEndTime(?string $value) 创建结束时间
 * @method Request whereUpdateid(?string $value) 词条最后更新人ID
 * @method Request whereUpdateStartDate(?string $value) 更新开始时间
 * @method Request whereUpdateEndDate(?string $value) 更新结束时间
 * @method Request whereEffectStartDate(?string $value) 生效开始时间
 * @method Request whereEffectEndDate(?string $value) 生效结束时间
 * @method Request whereInvalidStartDate(?string $value) 失效开始时间
 * @method Request whereInvalidEndDate(?string $value) 失效结束时间
 * @package MuCTS\Sobot\Robot\SearchDocList
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}