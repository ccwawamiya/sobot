<?php


namespace Ccwawamiya\Sobot;


class Code
{
    const SUCCESS_CODE = '000000'; // 操作成功

    // 系统级错误
    const TOKEN_IS_EMPTY   = '900001';// token为空
    const TOKEN_IS_INVALID = '900002';// token已失效，请重新获取
    const SIGNATURE_ERR    = '900003';// signature错误
    const API_CONFIG_ERR   = '900004';// 没有找到公司的api配置信息
    const SYSTEM_ERR       = '999999';// 系统未知异常

    // 业务错误
    const CREATE_TIME_IS_EMPTY    = '400001';// 创建时间不能为空
    const END_TIME_LT_CREATE_TIME = '400002';// 创建结束时间不能小于创建开始时间
    const QUERY_GT_ONE_MONTH      = '400003';// 查询创建时间段不能超过一个月
    const EMPTY_PARAM             = '400004';// 请求参数不能为空
    const WRONG_TIME_FORMAT       = '400005';// 时间格式不正确
    const EMPTY_SEAT_ID           = '400006';// 操作坐席ID不能为空
    const SEAT_ID_ERR             = '400007';// 操作坐席ID不正确
    const EMPTY_ORDER_CLASSIFY_ID = '400008';// 工单分类ID不能为空
    const EMPTY_ORDER_STATUS      = '400009';// 工单状态不能为空
    const EMPTY_ORDER_SOURCE      = '400010';// 工单来源不能为空
    const EMPTY_ORDER_LEVEL       = '400011';// 工单级别不能为空
    const EMPTY_SKILL_GROUP_ID    = '400012';// 技能组ID不能为空
    const CSG_NMA_CS              = '400013';// 受理客服组与受理客服不匹配
}