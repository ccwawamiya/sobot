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

namespace Ccwawamiya\Sobot\Tickets\SaveUserTicket;

/**
 * Class Request
 * 创建工单（客户）
 *
 * 1)调用此接口，系统会根据提交的参数按此优先级“客户ID > 对接ID > 客户邮箱 > 客户手机号”查找客户，如果匹配成功，用该客户作为工单关联客户，否则新建客户后关联。
 * 备注：
 * 1、此处所传工单自定义字段，必须是所传工单分类id关联工单模板中的自定义字段。
 * 2、分类关联模板中的自定义字段通过“查询工单分类关联的工单模板信息“接口获取。
 * 3、工单分类ID需要调用“查询数据字典”中工单分类获取具体值。
 * 4、如需上传附件，需要调用“附件上传（客户）”进行。
 *
 * @property-write string $companyid 企业ID
 * @property-write string $partnerid 对接ID
 * @property-write string $ticket_title 工单标题
 * @property-write string $userid 客户ID
 * @property-write string $ticket_content 工单问题描述
 * @property-write string $user_emails 客户邮箱
 * @property-write string $user_tels 客户电话
 * @property-write string $ticket_typeid 工单分类ID,叶子节点的分类ID
 * @property-write int $ticket_from 工单来源，1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，12 邮件留言，13语音留言，16微信小程序客户留言，17企业微信客户留言
 * @property-write string $file_str 附件路径，多个附件，附件之间采用英文分号";"隔开
 * @property-write array $extend_fields 工单自定义字段信息，格式：[["fieldid"=>"自定义字段ID","field_value"=>"自定义字段值"]]
 *
 * @method Request companyid(string $companyid) 企业ID
 * @method Request ticketTitle(string $ticketTitle) 工单标题
 * @method Request userid(string $userid) 客户ID
 * @method Request partnerid(string $partnerid) 对接ID
 * @method Request ticketContent(string $ticketContent) 工单问题描述
 * @method Request userEmails(string $userEmails) 客户邮箱
 * @method Request userTels(string $userTels) 客户电话
 * @method Request ticketTypeid(string $ticketTypeid) 工单分类ID, 叶子节点的分类ID
 * @method Request ticketFrom(string $ticketFrom) 工单来源, 1 PC客户留言，2 H5客户留言，3 微信公众号客户留言，4 APP客户留言，12 邮件留言，13语音留言，16微信小程序客户留言，17企业微信客户留言
 * @method Request fileStr(string $fileStr) 附件路径, 多个附件，附件之间采用英文分号";"隔开
 * @method Request extendFields(array $extendFields) 工单自定义字段信息，格式：[["fieldid" => "自定义字段ID", "field_value" => "自定义字段值"]]
 * @package Ccwawamiya\Sobot\Tickets\SaveUserTicket
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{
    /**
     * 追加工单自定义字段信息
     *
     * @param string $fieldid
     * @param string $fieldValue
     * @return $this
     */
    public function pushExtendFieldsItem(string $fieldid, string $fieldValue)
    {
        if (!array_key_exists('extend_fields', $this->param)) {
            $this->param['extend_fields'] = [];
        }
        $this->param['extend_fields'][] = ['fieldid' => $fieldid, 'field_value' => $fieldValue];
        return $this;
    }
}