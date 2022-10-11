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

namespace Ccwawamiya\Sobot\Robot\SearchDocList\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Items
 * @property-read string $all_type_name 分类全路径
 * @property-read string $answer_desc 知识库配置的答案内容，格式为HTML
 * @property-read int $answer_flag 答案类型:1文本，2图片，3图文，4视频
 * @property-read string $answerid 答案ID
 * @property-read string $answer_img 图文类型的缩略图
 * @property-read string $answer_txt 答案纯文本信息
 * @property-read string $audit_status 审核状态：0待审核，1永久有效，2指定时间有效
 * @property-read string $companyid 公司id
 * @property-read string $docid 词条ID
 * @property-read string $effect_time 生效时间
 * @property-read string $invalid_time 失效时间
 * @property-read int $link_flag 是否有关联问题，0是，1无
 * @property-read string $match_flag 匹配模式：0智能匹配，1完全匹配，2包含匹配，3欢迎语匹配
 * @property-read string $questionid 问题ID
 * @property-read string $question_title 问题标题
 * @property-read string $question_typeid 问题类型ID
 * @property-read string $question_type_name 问题类型名
 * @property-read int $robot_flag 知识库所属机器人：0公共知识库，1机器人一
 * @property-read int $smail_question_num 相似问法个数
 * @property-read string $updateid 更新人ID
 * @property-read string $update_time 更新时间
 * @property-read int $used_flag 词条状态，0启用，1手动停用，2系统停用，3过期停用
 * @package Ccwawamiya\Sobot\Robot\SearchDocList\Response
 */
class Items extends Response
{

}