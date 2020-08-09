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

namespace MuCTS\Sobot\Users\QueryEnterprises;


use MuCTS\Sobot\Users\QueryEnterprises\Response\Items;

/**
 * Class Response
 * @property-read string $ret_code 返回编码
 * @property-read string $ret_msg 返回信息
 * @property-read Items[] $items 对象列表
 * @property-read int $page_count 共几页
 * @property-read int $page_no 起始页
 * @property-read int $page_size 每页条数
 * @property-read int $total_count 数据条数
 * @package MuCTS\Sobot\Users\QueryEnterprises
 */
class Response extends \MuCTS\Sobot\Contracts\Response
{

}