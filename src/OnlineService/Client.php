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

namespace MuCTS\Sobot\OnlineService;


use MuCTS\Sobot\Contracts\Container;

/**
 * Class Client
 * @method AdminIsWork adminIsWork() 查询客服上下班时间
 * @method ChatConnect chatConnect() 请求人工客服
 * @method ChatSend chatSend() 客户咨询客服
 * @method Comment comment() 客户评价
 * @method GetDetailByCId getDetailByCId() 查询客户会话记录
 * @method GetOnceData getOnceData() 查询客服实时数据
 * @method OfflineMsgData offlineMsgData() 查询离线消息数据
 * @method OssDirectUrl ossDirectUrl() 单点登录接口
 * @method Out out() 客户结束会话
 * @method QueryAgent queryAgent() 查询在线客服列表
 * @method QueryCIds queryCIds() 查询客户会话列表
 * @method QueryGroup queryGroup() 查询在线技能组列表
 * @method QuerySummary querySummary() 查询服务总结记录
 * @package MuCTS\Sobot\OnlineService
 */
class Client extends Container
{

}