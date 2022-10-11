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

namespace Ccwawamiya\Sobot\Agents\SaveGroupAgent;

/**
 * Class Request
 * @property-write string $agent_ids 坐席id,多个坐席id用英文逗号","隔开
 *
 * @method Request whereGroupid(string $value) 技能组id
 * @package Ccwawamiya\Sobot\Agents\SaveAgent
 */
class Request extends \Ccwawamiya\Sobot\Contracts\Request
{
    /**
     * 坐席id,多个坐席id用英文逗号","隔开
     * @param array|string $value
     * @return Request
     */
    public function agentIds($value)
    {
        $this->param['agent_ids'] = is_array($value) ? implode(',', $value) : $value;
        return $this;
    }
}