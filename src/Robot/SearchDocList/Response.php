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

namespace MuCTS\Sobot\Robot\SearchDocList;


use MuCTS\Sobot\Robot\SearchDocList\Response\Items;

/**
 * Class Request
 * @property-read string $ret_code    String    返回编码
 * @property-read string $ret_msg    String    返回信息
 * @property-read Items[] $items    Object    返回对象
 * @property-read string $page_count    String    总页数
 * @property-read string $page_no    String    当前页码
 * @property-read string $page_size    String    每页条数
 * @property-read string $total_count    String    总条数
 * @package MuCTS\Sobot\Robot\SearchDocList
 */
class Response extends \MuCTS\Sobot\Contracts\Response
{

}