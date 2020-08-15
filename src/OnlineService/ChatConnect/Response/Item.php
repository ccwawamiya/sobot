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

namespace MuCTS\Sobot\OnlineService\ChatConnect\Response;


use MuCTS\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $status  状态：-1.重复请求，拒绝处理，0.排队，1.成功 2.无客服 3.在黑名单
 * @property-read string $status_cn 状态
 * @property-read string $agent_name  客服姓名
 * @property-read string $agent_face  客服头像
 * @property-read string $agentid  客服id
 * @property-read string $visitorid  用户id
 * @property-read string $cid  会话id
 * @property-read int $count  排队位置
 * @package MuCTS\Sobot\OnlineService\ChatConnect\Response
 */
class Item extends Response
{
    /**
     * 状态
     * @return string
     */
    public function getStatusCn()
    {
        /** @var int|null $status */
        $status = $this->status;
        if (is_null($status)) return null;
        $statusCn = [
            -1 => '重复请求，拒绝处理',
            0 => '排队',
            1 => '成功',
            2 => '无客服',
            3 => '在黑名单'
        ];
        return $statusCn[$status] ?? '未知';
    }
}