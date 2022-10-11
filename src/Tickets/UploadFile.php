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
 * Class UploadFile
 * 附件上传（坐席）
 *
 * 接口说明：
 * 坐席创建工单或回复工单时，上传一个或多个附件 先上传附件，
 * 再调用“创建工单（坐席）”或者“回复工单（坐席）”
 *
 * @property-write string $file 文件流,选择要上传的文件
 * @property-write string $file_num_key 上传文件标识,随机生成的值，用于判断上传文件数量
 *
 * @method UploadFile file(string $file) 文件流,选择要上传的文件
 * @method UploadFile fileNumKey(string $fileNumKey) 上传文件标识,随机生成的值，用于判断上传文件数量
 * @package Ccwawamiya\Sobot\Tickets
 */
class UploadFile extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_POST;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/upload_file';
    }

    public function __construct(array $config, ?Cache $cache = null)
    {
        parent::__construct($config, $cache);
        $this->addHeader('Content-Type', 'multipart/form-data;boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW');
    }
}