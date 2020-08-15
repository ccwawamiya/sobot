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

namespace MuCTS\Sobot\OnlineService\GetOnceData\Response\Item;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class AdminList
 * @property-read string $agentid 客服id
 * @property-read string[] $group_name 客服所在技能组名称列表
 * @property-read string[] $groupid 客服所在技能组id列表
 * @property-read int $count 客服实时接待用户数量
 * @property-read string agent_email 客服邮箱
 * @property-read int $status 客服状态(1-在线，2-忙碌)
 * @property-read string $status_cn 客服状态
 * @property-read int $status_code 自定义状态：3.小休 4.培训 5.会议 6.用餐 7.活动
 * @property-read string $status_code_cn 自定义状态
 * @property-read string $agent_name 客服姓名
 * @property-read string $agent_face 客服头像
 * @property-read string $remark 客服备注
 * @property-read string $agent_nick 客服昵称
 * @property-read int max_count 客服最大接待量
 * @property-read string status_time 状态持续时长 格式：hh:mm:ss
 * @package MuCTS\Sobot\OnlineService\GetOnceData\Response\Item
 */
class AdminList extends Response
{
    /**
     * 客服状态
     *
     * @return string
     */
    public function getStatusCn()
    {
        /** @var int|null $status */
        $status = $this->status;
        if (is_null($status)) return null;
        $statusCn = [
            1 => '在线',
            2 => '忙碌'
        ];
        return $statusCn[$status] ?? '未知';
    }

    /**
     * 自定义状态
     *
     * @return string
     */
    public function getStatusCodeCn()
    {
        /** @var int|null $statusCode */
        $statusCode = $this->status_code;
        $statusCodeCn = [
            3 => '小休',
            4 => '培训',
            5 => '会议',
            6 => '用餐',
            7 => '活动',
        ];
        return $statusCodeCn[$statusCode] ?? '未知';
    }
}