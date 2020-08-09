<?php


namespace MuCTS\Sobot\Token\Token;


use \MuCTS\Sobot\Contracts\Request as RequestContract;

class Request extends RequestContract
{
    private $createTime;

    /**
     * token创建时间
     *
     * @return int
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function getCreateTime()
    {
        if (is_null($this->createTime)) {
            $this->createTime = time();
        }
        return $this->createTime;
    }

    /**
     * 获取签名
     *
     * @return string
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    protected function getSign()
    {
        return md5($this->getAppId() . $this->getCreateTime() . $this->getAppKey());
    }

    /**
     * 返回请求数据
     *
     * @return array
     * @author herry.yao <yuandeng@aliyun.com>
     * @version 1.2.2
     * @date 2020-08-05
     */
    public function toArray(): array
    {
        return [
            'appid'       => $this->getAppId(),
            'create_time' => $this->getCreateTime(),
            'sign'        => $this->getSign()
        ];
    }
}