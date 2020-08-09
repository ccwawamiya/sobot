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

namespace MuCTS\Sobot\Robot\GetRobotGuide\Response\Item;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class LinkQuestionList
 * @property-read int $match_flag 匹配模式：0智能匹配，1完全匹配，2包含匹配，3欢迎语匹配
 * @property-read string $docid 词条id
 * @property-read string $guide_question_disname 显示名称
 * @property-read string $guide_question 标准问法
 * @package MuCTS\Sobot\Robot\GetRobotGuide\Response\Item
 */
class LinkQuestionList extends Response
{

}