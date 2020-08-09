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

namespace MuCTS\Sobot\Robot\QueryDocDetail\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\Robot\QueryDocDetail\Response\Item\LinkQuestionList;

/**
 * Class Item
 * @property-read string $answer_desc 知识库配置的答案内容，格式为HTML
 * @property-read int $answer_flag 答案类型:1文本，2图片，3图文，4视频
 * @property-read string $answer_flag_cn 答案类型
 * @property-read string $answerid 答案ID
 * @property-read string $answer_img 图文类型的缩略图
 * @property-read string $answer_txt 答案纯文本信息
 * @property-read string $answer_summary 图文类型摘要
 * @property-read int $audit_status 审核状态：0待审核，1永久有效，2指定时间有效
 * @property-read string $audit_status_cn 审核状态
 * @property-read string $companyid 公司id
 * @property-read string $docid 词条ID
 * @property-read string $create_time 创建时间
 * @property-read string $effect_time 生效时间
 * @property-read LinkQuestionList[] $link_question_list 关联问题列表,详见下文
 * @property-read string $link_question_num 关联问题个数
 * @property-read string $linked_flag 是否被其他问题关联，1是，0无
 * @property-read int $match_flag 匹配模式：0智能匹配，1完全匹配，2包含匹配，3欢迎语匹配
 * @property-read string $match_flag_cn 匹配模式
 * @property-read string $questionid 问题ID
 * @property-read string $question_title 问题标题
 * @property-read string $question_typeid 问题类型ID
 * @property-read string $question_type_name 问题类型名
 * @property-read int $robot_flag 知识库所属机器人：0公共知识库，1机器人一
 * @property-read string $smail_question_num 相似问法个数
 * @property-read string $updateid 更新人ID
 * @property-read string $update_time 更新时间
 * @property-read int $used_flag 词条状态，0启用，1手动停用，2系统停用，3过期停用
 * @property-read string $used_flag_cn 词条状态
 * @package MuCTS\Sobot\Robot\QueryDocDetail\Response
 */
class Item extends Response
{
    /**
     * 答案类型
     *
     * @return string
     */
    public function getAnswerFlagCn()
    {
        $answerFlag = intval($this->answer_flag);
        switch ($answerFlag) {
            case 1 :
                return '文本';
            case 2:
                return '图片';
            case 3:
                return '图文';
            case 4:
                return '视频';
            default:
                return '未知';
        }
    }

    /**
     * 审核状态
     * @return string
     */
    public function getAuditStatusCn()
    {
        $auditStatus = intval($this->audit_status);
        switch ($auditStatus) {
            case 0:
                return '待审核';
            case 1:
                return '永久有效';
            case 2:
                return '指定时间有效';
            default:
                return '未知';
        }
    }

    /**
     * 匹配模式
     * @return string
     */
    public function getMatchFlagCn()
    {
        $matchFlag = intval($this->match_flag);
        switch ($matchFlag) {
            case 0:
                return '智能匹配';
            case 1:
                return '完全匹配';
            case 2:
                return '包含匹配';
            case 3:
                return '欢迎语匹配';
            default:
                return '未知';
        }
    }

    /**
     * 词条状态
     *
     * @return string
     */
    public function getUsedFlagCn()
    {
        $usedFlag = intval($this->used_flag);
        switch ($usedFlag) {
            case 0:
                return '启用';
            case 1:
                return '手动停用';
            case 2:
                return '系统停用';
            case 3:
                return '过期停用';
            default:
                return '未知';
        }
    }
}