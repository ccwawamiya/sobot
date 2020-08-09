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
 * Class Suggestions
 * @property-read string $question  推荐问题的名称
 * @property-read string $answer  推荐问题的答案
 * @property-read string $docid  推荐问题的词条Id
 * @package MuCTS\Sobot\Robot\RobotChat\Response\Item
 */
class Suggestions extends Response
{

}