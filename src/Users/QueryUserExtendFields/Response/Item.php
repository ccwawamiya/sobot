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

namespace Ccwawamiya\Sobot\Users\QueryUserExtendFields\Response;


use Ccwawamiya\Sobot\Contracts\Response;
use Ccwawamiya\Sobot\Users\QueryUserExtendFields\Response\Item\ExtendFields;

/**
 * Class Item
 * @property-read string $companyid 公司ID
 * @property-read string $operate_type 自定义字段类型,客户自定义字段
 * @property-read ExtendFields[] $extend_fields 扩展字段列表
 * @package Ccwawamiya\Sobot\Users\QueryUserExtendFields\Response
 */
class Item extends Response
{

}