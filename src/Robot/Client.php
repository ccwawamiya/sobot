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


use MuCTS\Sobot\Contracts\Container;

/**
 * Class Client
 * @method AddRobotDoc addRobotDoc() 添加知识库词条
 * @method DeleteRobotDoc deleteRobotDoc() 删除知识库词条
 * @method GetRobotGuide getRobotGuide() 获取常见问题
 * @method QueryDocDetail queryDocDetail() 查询知识库词条
 * @method RobotChat robotChat() 用户咨询机器人
 * @method RobotFeedback robotFeedback() 机器人回答评价
 * @method SearchDocList searchDocList() 查询知识库词条列表
 * @method SearchQuestionTypeList searchQuestionTypeList() 查询知识库分类列表
 * @method UpdateRobotDoc updateRobotDoc() 修改知识库词条
 * @package MuCTS\Sobot\Robot
 */
class Client extends Container
{

}