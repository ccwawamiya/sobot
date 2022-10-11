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

namespace Ccwawamiya\Sobot\Robot\SearchQuestionTypeList;


/**
 * Class Request
 * @method Request whereParentTypeid(string $value) 父级分类id，顶级分类id-1
 * @method Request whereRobotFlag(int $value) 知识库所属机器人：0公共知识库，1机器人一
 * @method Request whereTypeFlag(?int $value) 分类类型：1-单轮问题分类(默认)；2-多轮问题分类
 * @package Ccwawamiya\Sobot\Robot\SearchQuestionTypeList
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{

}