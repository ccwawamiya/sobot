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

namespace Ccwawamiya\Sobot\Agents;


use Ccwawamiya\Sobot\Contracts\Container;

/**
 * Class Client
 * @method DeleteAgent deleteAgent() 删除坐席信息
 * @method DeleteGroupAgent deleteGroupAgent() 删除技能组内坐席
 * @method DeleteGroups deleteGroups() 删除技能组
 * @method QueryAgentRoles queryAgentRoles() 查询坐席角色
 * @method QueryAgents queryAgents() 查询坐席列表
 * @method QueryDepartments queryDepartments() 查询组织结构
 * @method QueryGroupAgents queryGroupAgents() 查询技能组内坐席
 * @method QueryGroups queryGroups() 查询技能组
 * @method SaveAgent saveAgent() 新增坐席信息
 * @method SaveGroupAgent saveGroupAgent() 增加坐席到技能组
 * @method SaveGroups saveGroups() 新增技能组
 * @method UpdateAgent updateAgent() 更新坐席信息
 * @method UpdateGroups updateGroups() 更新技能组
 * @package Ccwawamiya\Sobot\Agents
 */
class Client extends Container
{

}