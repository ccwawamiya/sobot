<?php


namespace MuCTS\Sobot\Contracts;

trait ResponseCnEnum
{
    /**
     * 工单发起人类型
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getStartTypeCn()
    {
        $startType = intval($this->start_type);
        switch ($startType) {
            case 0:
                return '坐席';
            case 1:
                return '客户';
            default:
                return '未知';
        }
    }

    /**
     * 工单状态
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketStatusCn()
    {
        $ticketStatus = intval($this->ticket_status);
        switch ($ticketStatus) {
            case 0:
                return '尚未受理';
            case 1:
                return '受理中';
            case 2:
                return '等待回复';
            case 3:
                return '已解决';
            case 99:
                return '已关闭';
            case 98:
                return '已删除';
            default:
                return '未知';
        }
    }

    /**
     * 工单优先级
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketLevelCn()
    {
        $ticketLevel = intval($this->ticket_level);
        switch ($ticketLevel) {
            case 0:
                return '低';
            case 1:
                return '中';
            case 2:
                return '高';
            case 3:
                return '紧急';
            default:
                return '未知';
        }
    }

    /**
     * 工单来源
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-06
     */
    public function getTicketFromCn()
    {
        $ticketFrom = $this->ticket_from;
        switch (intval($ticketFrom)) {
            case 0 :
                return '工单中心';
            case 1 :
                return 'PC客户留言';
            case 2 :
                return 'H5客户留言';
            case 3 :
                return '微信公众号客户留言';
            case 4 :
                return 'APP客户留言';
            case 6 :
                return 'PC-在线工作台';
            case 7 :
                return '客户中心';
            case 8 :
                return '呼叫中心';
            case 9 :
                return '微信公众号-在线工作台';
            case 10:
                return 'H5-在线工作台';
            case 11:
                return 'APP-在线工作台';
            case 12:
                return '邮件留言';
            case 13:
                return '语音留言';
            case 14:
                return '微信小程序-在线工作台';
            case 15:
                return '企业微信-在线工作台';
            case 16:
                return '微信小程序客户留言';
            case 17:
                return '企业微信客户留言';
            default:
                return '未知';
        }
    }

    /**
     * 回复类型
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    public function getReplyTypeCn()
    {
        $replyType = intval($this->reply_type);
        switch ($replyType) {
            case 0:
                return '所有人可见';
            case 1:
                return '仅坐席所见';
            default:
                return '未知';
        }
    }

    /**
     * 自定义字段类型
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    protected function getFieldTypeCn()
    {
        $fieldType = intval($this->field_type);
        switch ($fieldType) {
            case 1:
                return '单行文本';
            case 2:
                return '多行文本';
            case 3:
                return '日期';
            case 4:
                return '时间';
            case 5:
                return '数值';
            case 6:
                return '下拉列表';
            case 7:
                return '复选框';
            case 8:
                return '单选框';
            default:
                return '未知';
        }
    }

    /**
     * 操作记录来源
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-07
     */
    public function getLogFromCn()
    {
        $log_from = intval($this->log_from);
        switch ($log_from) {
            case 1:
                return '页面操作';
            case 2:
                return '流转触发器';
            case 3:
                return '定时触发器';
            default:
                return '未知';
        }
    }

    /**
     * 发送者类型
     * @return string
     */
    public function getSenderTypeCn()
    {
        $senderType = intval($this->sender_type);
        switch ($senderType) {
            case 0:
                return '用户';
            case 1:
                return '机器人';
            case 2:
                return '客服';
            default:
                return '未知';
        }
    }

    /**
     * 接收者类型
     * @return string
     */
    public function getReceiverTypeCn()
    {
        $receiverType = intval($this->receiver_type);
        switch ($receiverType) {
            case 0:
                return '用户';
            case 1:
                return '机器人';
            case 2:
                return '客服';
            default:
                return '未知';
        }
    }

    /**
     * 消息类型：0-文本，1-图片，2-音频，3-富文本
     *
     * @return string
     */
    public function getMsgTypeCn()
    {
        $msgType = intval($this->msg_type);
        switch ($msgType) {
            case 0:
                return '文本';
            case 1:
                return '图片';
            case 2:
                return '音频';
            case 3:
                return '富文本';
            default:
                return '未知';
        }
    }

    /**
     * 坐席状态
     * @return string
     */
    public function getAgentStatusCn()
    {
        $agentStatus = intval($this->agent_status);
        switch ($agentStatus) {
            case 0:
                return '未激活';
            case 1:
                return '启用中';
            case 2:
                return '平台管控';
            case 9:
                return '停用';
            case -1:
                return '删除';
            default:
                return '未知';
        }
    }
}