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

namespace Ccwawamiya\Sobot\Call\QueryCallRecords\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string	$companyid	公司ID
 * @property-read string	$departmentid	组织权限id
 * @property-read string	$callid	通话记录id
 * @property-read string	$parent_call_recordid	主通话id	对于主话单:parent_call_recordid = id
 * @property-read int	$agent_ring_time	振铃时间	坐席振铃时间，如果空表示用户来点还没转到坐席就挂掉了，时间戳格式
 * @property-read string	$agent_ring_time_str	振铃时间	同上，只是时间格式是字符串类型
 * @property-read int	$agent_hungup_time	坐席挂机时间
 * @property-read string	$agent_hungup_time_str	坐席挂机时间
 * @property-read int	$agent_answer_time	坐席接听时间
 * @property-read string	$agent_answer_time_str	坐席接听时间
 * @property-read int	$ring_time_duration	振铃时长	单位秒
 * @property-read string	$businessid	服务总结所属业务id
 * @property-read string	$business_name	业务名称	服务总结所属业务名称
 * @property-read string	$business_typeid	业务类型id	服务总结所属业务类型id
 * @property-read string	$business_type_name	业务类型名称	服务总结所属业务类型名称
 * @property-read string	$bussiness_type_pathid	业务类型路径id	服务总结所属业务类型路径id
 * @property-read string	$bussiness_type_path_name	业务类型路径名称	服务总结所属业务类型路径名称
 * @property-read int	$call_duration	通话总时长
 * @property-read int	$call_flag	接听标示	0未接听，1已接听
 * @property-read int	$call_result	通话结果	10. 坐席接听11.振铃未接听12.ivr放弃13.排队放弃14.非服务时间来电15.呼入话机异常16.呼入网络异常17.排队超时18.客户速挂20.客户接听21.客户未接听25.呼出话机异常26.呼出网络异常781.客户拒接774.号码空号770.客户关机771.客户停机772.暂时无法接通773.客户正在通话 30第三方接听、31第三方无法接通（所有其他的因素）、32第三方振铃未接听（包括长时间无应答、第三方拒接）
 * @property-read boolean	$call_succ	通话结果	通话结果使用
 * @property-read int	$call_way	接听方式	1网页电话，2sip话机，3手机
 * @property-read string	$callee	被叫号码
 * @property-read string	$calleeid	被叫人id	可能是坐席或已知用户id
 * @property-read string	$callee_name	被叫人姓名
 * @property-read string	$caller	主叫号码
 * @property-read string	$callerid	主叫人id	可能是坐席或已知用户id
 * @property-read string	$caller_name	主叫人名称
 * @property-read int	$call_type	呼叫类型	0（呼入），1（呼出）、11（咨询客服），12（咨询第三方），21(转接咨询)、22(转接客服)、23(转接第三方)，3(监听)、4(强插通话)、5(强拆通话)
 * @property-read int	$call_direction	呼叫方向	0（呼入），1（呼出）
 * @property-read int	$duration	录音时长
 * @property-read int	$end_time	结束时间	整个呼叫服务通话结束时间
 * @property-read string	$end_time_str	结束时间	整个呼叫服务通话结束时间
 * @property-read int	$ender	挂断方	0 系统超时挂断,1客服挂断,2客户挂断
 * @property-read Int	$enter_group_flag	是否进入队列	0 否 1 是
 * @property-read int	$exist_flag	是否已知用户	0:未知用户，1：已知用户
 * @property-read double	$fee	费用	通话产生的费用
 * @property-read int	$fee_duration	计费时长	计费时长, 单位：分钟
 * @property-read string	$groupid	技能组id	呼叫时使用的技能组
 * @property-read string	$group_name	技能组名称
 * @property-read int	$group_type	否为电销组	2.普通3.电销
 * @property-read int	$handle_status	服务总结	1 未处理 0 未解决 1 已解决
 * @property-read int	$hidden_flag	否隐藏号码	0.不隐藏 1.中间隐藏2.末尾隐藏
 * @property-read int	$hold	保持	1.有保持0.没保持
 * @property-read int	$hold_count	保持次数
 * @property-read int	$hold_time	保持持续时间
 * @property-read int	$in_queue_time	排队入队时间
 * @property-read string	$in_queue_time_str	排队入队时间
 * @property-read int	$out_call_in_task_flag	电销任务外呼	是否是外呼任务 0否1是
 * @property-read int	$queue_flag	是否有排队	0没有排队；1有排队
 * @property-read string	$nick	昵称	客户昵称
 * @property-read string	$number_city	电话归属地城市
 * @property-read string	$number_provice	电话归属地省份
 * @property-read int	$out_queue_time	排队出队时间
 * @property-read string	$out_queue_time_str	排队出队时间
 * @property-read int	$quality_status	是否质检	0未质检 1质检过
 * @property-read int	$queue_duration	排队时长
 * @property-read int	$queue_state	排队状态	1.未排队 2.排队成功 3.排队超时 4.排队离开 （排队放弃=3+4）
 * @property-read string	$receive_staffids	接待客服id	按时间先后排，逗号隔开，有转接的
 * @property-read string	$receive_staff_names	接待客服名字	按时间先后排，逗号隔开
 * @property-read string	$remarks	备注
 * @property-read int	$satisfy_level	满意度级别	0：未开启满意度，2：二级满意度，3：三级满意度，5：五级满意度，10：自定义满意度
 * @property-read string	$satisfy_value	满意度名称	未评价，非常不满意，不满意，一般，满意，非常满意，自定义满意度1，自定义满意度2，自定义满意度3，自定义满意度4，自定义满意度5，自定义满意度6
 * @property-read int	$satisfy_key	满意度按键	0：未评价 1，2，3，4，5，6
 * @property-read string	$service_email	坐席账号
 * @property-read string	$staffid	坐席id
 * @property-read string	$staff_name	坐席名称
 * @property-read int	$start_time	开始时间	呼叫开始时间
 * @property-read string	$start_time_str	开始时间	呼叫开始时间
 * @property-read string	$summary_staff_name	坐席名称	记录服务总结的坐席名称
 * @property-read int	$summary_update_time	更新时间	更新服务总结的时间
 * @property-read string	$summary_update_time_str	更新时间	更新服务总结的时间
 * @property-read string	$taskid	任务id	通过电销任务外呼的任务id
 * @property-read int	$transfer_count	转接次数
 * @property-read int	$transfer_flag	是否转接	0=未转接 1= 转接咨询 2= 转接
 * @property-read int	$unhold	保持	1.正常取消 0.没有取消
 * @property-read int	$user_ring_time	振铃时间	坐席呼出用户 的振铃时间
 * @property-read string	$user_ring_time_str	振铃时间	坐席呼出用户 的振铃时间
 * @property-read int	$user_answer_time	应答时间	外呼时用户应答时间
 * @property-read string	$user_answer_time_str	应答时间	外呼时用户应答时间
 * @property-read string	$user_companyid	客户公司id	已知用户所在公司id
 * @property-read string	$user_company_name	客户公司名称	已知用户所在公司名称
 * @property-read string	$userid	客户id	已知用户id
 * @property-read string	$user_name	客户名称	已知用户名称
 * @property-read string	$voice_aliyun_url	录音地址	接通的有值
 * @property-read int	$page_count	页数
 * @property-read int	$page_no	当前页数
 * @property-read int	$page_size	每页条数	建议不要大于15
 * @property-read int	$total_count	总条数
 * @property-read Int	$consult_flag	是否咨询	0未咨询、1咨询（默认0，只有咨询成功）
 * @property-read Int	$consult_count	咨询次数
 * @property-read Int	$leave_msg_flag	留言标识	0未留言，1留言
 * @property-read string	$leave_msg_url	留言地址
 * @property-read string	$params	客户自定义字段
 * @property-read int	$interval_duration	坐席通话时长
 * @property-read string	$abandon_flag	是否存在ivr放弃	0 无；1 是
 * @property-read string	$agent_wait_duration	客服等待时长	客服话机振铃接起到分配了客户电话接通的等待时长
 * @property-read string	$appid	应用id
 * @property-read string	$break_down_succ_time	强插后强拆成功的时间	没有强插强拆则为0
 * @property-read string	$break_in_succ_time	强插时间	监听后强插成功的时间，只有呼叫类型为强插通话记录，没有强插强拆则为0
 * @property-read string	$disNumber	外显号码
 * @package Ccwawamiya\Sobot\Call\QueryCallRecords\Response
 */
class Items extends Response
{

}