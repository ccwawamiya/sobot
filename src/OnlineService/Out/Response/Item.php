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

namespace MuCTS\Sobot\OnlineService\Out\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int status 状态：1.成功
 * @property-read string status_cn 状态
 * @package MuCTS\Sobot\OnlineService\Out\Response
 */
class Item extends Response
{
    /**
     * 状态
     * @return string
     */
    public function getStatusCn()
    {
        $status = intval($this->status);
        switch ($status) {
            case 1:
                return '成功';
            default:
                return '失败';
        }
    }
}