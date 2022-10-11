<?php


namespace Ccwawamiya\Sobot\Tickets;


use Ccwawamiya\Sobot\Contracts\Sobot;

/**
 * Class QueryAgentJobs
 * 查询工单坐席工作量
 *
 * 接口说明：
 * 获取某个时间段工单坐席工作量。
 *
 * @method QueryAgentJobs whereStartDatetime(string $startDatetime) 开始时间，2019-09-18 00:00:00
 * @method QueryAgentJobs whereEndDatetime(string $endDatetime) 结束时间，2019-09-18 23:59:59
 * @package Ccwawamiya\Sobot\Tickets
 */
class QueryAgentJobs extends Sobot
{

    public function getRequestMethod(): string
    {
        return self::METHOD_GET;
    }

    public function getRequestPath(): string
    {
        return '/api/ws/5/ticket/query_agent_jobs';
    }
}