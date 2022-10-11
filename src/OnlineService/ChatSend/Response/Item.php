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

namespace Ccwawamiya\Sobot\OnlineService\ChatSend\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $status 状态：1.成功 2.用户没有跟客服建立连接
 * @property-read string $status_cn
 * @package Ccwawamiya\Sobot\OnlineService\ChatSend\Response
 */
class Item extends Response
{
    /**
     * 状态
     * @return string
     */
    public function getStatusCn()
    {
        $status = $this->status;
        $statusCn = [
            1 => '成功',
            2 => '用户没有跟客服建立连接'
        ];
        return $statusCn[$status] ?? '未知';
    }
}