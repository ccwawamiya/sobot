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

namespace MuCTS\Sobot\Robot\GetRobotGuide\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\Robot\GetRobotGuide\Response\Item\LinkQuestionList;

/**
 * Class Item
 * @property-read int $robot_flag 机器人编号,可以在「设置-机器人-机器人信息」中查看
 * @property-read string $question_id 问题id
 * @property-read string $link_question_num 引导语数量
 * @property-read LinkQuestionList $link_question_list 引导语对象
 * @property-read string $companyid 公司id
 * @property-read string $guide_strip 引导语
 * @package MuCTS\Sobot\Robot\GetRobotGuide\Response
 */
class Item extends Response
{

}