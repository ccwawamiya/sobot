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

namespace MuCTS\Sobot\OnlineService\QuerySummary\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\OnlineService\QuerySummary\Response\Item\Fields;

/**
 * Class Item
 * @property-read int $summary_flag 总结状态，1-已总结，0-未总结
 * @property-read string $summary_flag_cn 总结状态
 * @property-read string $update_time 总结时间
 * @property-read string $operation_name 业务单元
 * @property-read string $req_type_name 业务类型
 * @property-read int $question_status 解决状态，1-已解决，0-未解决
 * @property-read string $question_status_cn 解决状态
 * @property-read string $question_description 备注说明
 * @property-read int $invalid_session 无效会话，1-无效，0-有效
 * @property-read string $invalid_session_cn 无效会话
 * @property-read Fields[] $fields 自定义字段列表
 * @property-read string $summary_staff_name 总结客服
 * @property-read string $cid 会话id
 * @package MuCTS\Sobot\OnlineService\QuerySummary\Response
 */
class Item extends Response
{
    /**
     * 总结状态
     * @return string
     */
    public function getSummaryFlagCn()
    {
        $summaryFlag = intval($this->summary_flag);
        return $summaryFlag == 1 ? '已总结' : '未总结';
    }

    /**
     * 解决状态
     * @return string
     */
    public function getQuestionStatusCn()
    {
        $questionStatus = intval($this->question_status);
        return $questionStatus == 1 ? '已解决' : '未解决';
    }

    /**
     * 无效会话
     * @return string
     */
    public function getInvalidSessionCn()
    {
        $invalidSession = intval($this->invalid_session);
        return $invalidSession == 1 ? '无效' : '有效';
    }
}