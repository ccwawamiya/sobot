<?php


namespace Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class DealList
 * @property-read string $reply_title 回复标题
 * @property-read string|null $reply_content 回复内容
 * @property-read int $reply_type 回复类型：0 所有人可见 1 仅坐席所见
 * @property-read string $reply_type_cn 回复类型
 * @property-read string $reply_datetime 回复时间：2018-09-18 10:34:45
 * @property-read int $start_type 回复人类型:0 坐席 1 客户
 * @property-read string $start_type_cn 回复人类型
 * @property-read string $update_user_name 回复人名称
 * @property-read string $face_img 回复人头像
 * @property-read FileList[] file_list 回复附件
 * @package Ccwawamiya\Sobot\Tickets\GetTicketById\Response\Item
 */
class DealList extends Response
{
}