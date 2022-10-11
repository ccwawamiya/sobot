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

namespace Ccwawamiya\Sobot\Robot\RobotFeedback\Response;


use Ccwawamiya\Sobot\Contracts\Response;

/**
 * Class Item
 * @property-read int $ustatus 用户状态 -2：排队，-1：机器人，0：离线，1-在线
 * @property-read string $ustatus_cn 用户状态
 * @package Ccwawamiya\Sobot\Robot\RobotFeedback\Response
 */
class Item extends Response
{
    /**
     * 用户状态
     *
     * @return string
     */
    public function getUstatusCn()
    {
        $ustatus = intval($this->ustatus);
        switch ($ustatus) {
            case -2:
                return '排队';
            case -1:
                return '机器人';
            case 0:
                return '离线';
            case 1:
                return '在线';
            default:
                return '未知';
        }
    }
}