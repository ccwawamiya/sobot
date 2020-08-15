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

namespace MuCTS\Sobot\OnlineService\Comment\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $status  状态：0.失败，1.成功，2-已评价，3-无咨询，不能评价
 * @property-read string $status_cn 状态
 * @property-read string cid  会话ID
 * @package MuCTS\Sobot\OnlineService\Comment\Response
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
            0 => '失败',
            1 => '成功',
            2 => '已评价',
            3 => '无咨询，不能评价'
        ];
        return $statusCn[$status] ?? '未知';
    }
}