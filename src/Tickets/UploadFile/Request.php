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

namespace MuCTS\Sobot\Tickets\UploadFile;

/**
 * Class Request
 * @property-write $file 文件流,选择要上传的文件
 * @property-write $file_num_key 上传文件标识,随机生成的值，用于判断上传文件数量
 *
 * @method Request file($file) 文件流, 选择要上传的文件
 * @method Request fileNumKey($fileNumKey) 上传文件标识, 随机生成的值，用于判断上传文件数量
 * @package MuCTS\Sobot\Tickets\UploadFile
 */
class Request extends \MuCTS\Sobot\Contracts\Request
{

}