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

namespace MuCTS\Sobot\OnlineService\AdminIsWork\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read string $is_work 上下班状态：true-上班；false-下班
 * @property-read string $is_work_cn 上下班状态
 * @package MuCTS\Sobot\OnlineService\AdminIsWork\Response
 */
class Item extends Response
{
    /**
     * 上下班状态
     * @return string
     */
    public function getIsWorkCn()
    {
        $is_work = $this->is_work;
        return $is_work === 'true' ? '上班' : '下班';
    }
}