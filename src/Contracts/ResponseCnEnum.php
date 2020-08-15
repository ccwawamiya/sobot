<?php


namespace MuCTS\Sobot\Contracts;
/**
 * Trait ResponseCnEnum
 * @mixin Response
 * @package MuCTS\Sobot\Contracts
 */
trait ResponseCnEnum
{
    /**
     * 工单发起人类型
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getStartTypeCn()
    {
        /** @var int|null $startType */
        $startType = $this->start_type;
        if (is_null($startType)) return null;
        $startTypeCn = [
            0 => '坐席',
            1 => '客戶'
        ];
        return $startTypeCn[$startType] ?? '未知';
    }

    /**
     * 工单状态
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketStatusCn()
    {
        /** @var int|null $ticketStatus */
        $ticketStatus = $this->ticket_status;
        if (is_null($ticketStatus)) return null;
        $ticketStatusCn = [
            0 => '尚未受理',
            1 => '受理中',
            2 => '等待回复',
            3 => '已解决',
            99 => '已关闭',
            98 => '已删除',
        ];
        return $ticketStatusCn[$ticketStatus] ?? '未知';
    }

    /**
     * 工单优先级
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketLevelCn()
    {
        /** @var int|null $ticketLevel */
        $ticketLevel = $this->ticket_level;
        if (is_null($ticketLevel)) return null;
        $ticketLevelCn = [
            0 => '低',
            1 => '中',
            2 => '高',
            3 => '紧急'
        ];
        return $ticketLevelCn[$ticketLevel] ?? '未知';
    }

    /**
     * 工单来源
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketFromCn()
    {
        /** @var int|null $ticketFrom */
        $ticketFrom = $this->ticket_from;
        if (is_null($ticketFrom)) return null;
        $ticketFromCn = [
            0 => '工单中心',
            1 => 'PC客户留言',
            2 => 'H5客户留言',
            3 => '微信公众号客户留言',
            4 => 'APP客户留言',
            6 => 'PC-在线工作台',
            7 => '客户中心',
            8 => '呼叫中心',
            9 => '微信公众号-在线工作台',
            10 => 'H5-在线工作台',
            11 => 'APP-在线工作台',
            12 => '邮件留言',
            13 => '语音留言',
            14 => '微信小程序-在线工作台',
            15 => '企业微信-在线工作台',
            16 => '微信小程序客户留言',
            17 => '企业微信客户留言',
        ];
        return $ticketFromCn[$ticketFrom] ?? '未知';
    }

    /**
     * 回复类型
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    public function getReplyTypeCn()
    {
        /** @var int|null $replyType */
        $replyType = $this->reply_type;
        if (is_null($replyType)) return null;
        $replyTypeCn = [
            0 => '所有人可见',
            1 => '仅坐席可见'
        ];
        return $replyTypeCn[$replyType] ?? '未知';
    }

    /**
     * 自定义字段类型
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    protected function getFieldTypeCn()
    {
        /** @var int|null $fieldType */
        $fieldType = $this->field_type;
        if (is_null($fieldType)) return null;
        $fieldTypeCn = [
            1 => '单行文本',
            2 => '多行文本',
            3 => '日期',
            4 => '时间',
            5 => '数值',
            6 => '下拉列表',
            7 => '复选框',
            8 => '单选框'
        ];
        return $fieldTypeCn[$fieldType] ?? '未知';
    }

    /**
     * 操作记录来源
     *
     * @return string|null
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    public function getLogFromCn()
    {
        /** @var int|null $logFrom */
        $logFrom = $this->log_from;
        if (is_null($logFrom)) return null;
        $logFromCn = [
            1 => '页面操作',
            2 => '流转触发器',
            3 => '定时触发器'
        ];
        return $logFromCn[$logFrom] ?? '未知';
    }

    /**
     * 发送者类型
     * @return string|null
     */
    public function getSenderTypeCn()
    {
        /** @var int|null $senderType */
        $senderType = $this->sender_type;
        if (is_null($senderType)) return null;
        $senderTypeCn = [
            0 => '用户',
            1 => '机器人',
            2 => '客服'
        ];
        return $senderTypeCn[$senderType] ?? '未知';
    }

    /**
     * 接收者类型
     * @return string|null
     */
    public function getReceiverTypeCn()
    {
        /** @var int|null $receiverType */
        $receiverType = $this->receiver_type;
        if (is_null($receiverType)) return null;
        $receiverTypeCn = [
            0 => '用户',
            1 => '机器人',
            2 => '客服'
        ];
        return $receiverTypeCn[$receiverType] ?? '未知';
    }

    /**
     * 消息类型：0-文本，1-图片，2-音频，3-富文本
     *
     * @return string|null
     */
    public function getMsgTypeCn()
    {
        /** @var int|null $msgType */
        $msgType = $this->msg_type;
        if (is_null($msgType)) return null;
        $msgTypeCn = [
            0 => '文本',
            1 => '图片',
            2 => '音频',
            3 => '富文本'
        ];
        return $msgTypeCn[$msgType] ?? '未知';
    }

    /**
     * 坐席状态
     * @return string|null
     */
    public function getAgentStatusCn()
    {
        /** @var int|null $agentStatus */
        $agentStatus = $this->agent_status;
        if (is_null($agentStatus)) return null;
        $agentStatusCn = [
            0 => '未激活',
            1 => '启用中',
            2 => '平台管控',
            9 => '停用',
            -1 => '删除'
        ];
        return $agentStatusCn[$agentStatus] ?? '未知';
    }
}