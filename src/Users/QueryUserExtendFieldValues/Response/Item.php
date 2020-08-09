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

namespace MuCTS\Sobot\Users\QueryUserExtendFieldValues\Response;


use MuCTS\Sobot\Contracts\Response;
use MuCTS\Sobot\Users\QueryUserExtendFieldValues\Response\Item\ExtendFieldValues;

/**
 * Class Item
 * @property-read string $companyid 公司ID
 * @property-read string $userid 客户id
 * @property-read ExtendFieldValues[] $extend_fields 扩展字段列表	
 * @package MuCTS\Sobot\Users\QueryUserExtendFieldValues\Response
 */
class Item extends Response
{

}