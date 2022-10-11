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

namespace Ccwawamiya\Sobot\Tickets;


use Ccwawamiya\Sobot\Contracts\Cache;
use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class UserUploadFile
 * 附件上传（客户）
 *
 * 接口说明：
 * 客户创建工单或回复工单时，上传一个或多个附件。
 * 先上传附件，再调用“创建工单（客户）”或者“回复工单（客户）”。
 *
 * @property-write string $file 文件流,选择要上传的文件
 * @property-write string $file_num_key 上传文件标识,随机生成的值，用于判断上传文件数量
 *
 * @method UserUploadFile file(string $file) 文件流,选择要上传的文件
 * @method UserUploadFile fileNumKey(string $fileNumKey) 上传文件标识,随机生成的值，用于判断上传文件数量
 * @package Ccwawamiya\Sobot\Tickets
 */
class UserUploadFile extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/user_upload_file';
    }

    public function __construct(array $config, ?Cache $cache = null)
    {
        parent::__construct($config, $cache);
        $this->addHeader('Content-Type', 'multipart/form-data;boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW');
    }
}