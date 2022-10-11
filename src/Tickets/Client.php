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

namespace Ccwawamiya\Sobot\Tickets;


use Ccwawamiya\Sobot\Contracts\Container;

/**
 * Class Client
 * @method DataDict dataDict() 查询数据字典
 * @method FiledList filedList() 查询工单分类关联的工单模板
 * @method GetTicketById getTicketById() 查询工单详情页
 * @method GetTicketData getTicketData() 查询工单统计概览
 * @method QueryAgentJobs queryAgentJobs() 查询工单坐席工作量
 * @method QueryTicketPushFailInfos queryTicketPushFailInfos() 查询工单消息推送异常数据
 * @method SaveAgentTicket saveAgentTicket() 创建工单（坐席）
 * @method SaveTicketReply saveTicketReply() 回复工单（坐席）
 * @method SaveOptionDataValue saveOptionDataValue() 工单自定义字段（选择型）添加选项信息
 * @method SaveUserReply saveUserReply() 回复工单（客户）
 * @method SaveUserTicket saveUserTicket() 创建工单（客户）
 * @method TicketExtendFields ticketExtendFields() 查询自定义字段定义信息
 * @method TicketList ticketList() 查询工单列表
 * @method UploadFile uploadFile() 附件上传（坐席）
 * @method UserUploadFile userUploadFile() 附件上传（客户）
 * @package Ccwawamiya\Sobot\Tickets
 */
class Client extends Container
{

}