<p align="center"><img src="https://images.mucts.com/image/exp_def_white.png" width="400"></p>
<p align="center">
    <a href="https://scrutinizer-ci.com/g/mucts/sobot"><img src="https://scrutinizer-ci.com/g/mucts/sobot/badges/build.png" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/mucts/sobot"><img src="https://scrutinizer-ci.com/g/mucts/sobot/badges/code-intelligence.svg" alt="Code Intelligence Status"></a>
    <a href="https://scrutinizer-ci.com/g/mucts/sobot"><img src="https://scrutinizer-ci.com/g/mucts/sobot/badges/quality-score.png" alt="Scrutinizer Code Quality"></a>
    <a href="https://packagist.org/packages/mucts/sobot"><img src="https://poser.pugx.org/mucts/sobot/d/total.svg" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/mucts/sobot"><img src="https://poser.pugx.org/mucts/sobot/v/stable.svg" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/mucts/sobot"><img src="https://poser.pugx.org/mucts/sobot/license.svg" alt="License"></a>
</p>

# Sobot 
> 根据智齿智能客服系统提供了包含完整业务流程的开放平台接口（Open API），基于PHP开发的一套API插件。

## 安装

```
composer require mucts/sobot
```

## 功能
> 已实现的功能
- [获取访问token编码](https://www.sobot.com/developerdocs/service/online_service.html#_1%E3%80%81%E6%8E%A5%E5%8F%A3%E5%A3%B0%E6%98%8E)

```php
<?php
use MuCTS\Sobot\Sobot;
// 获取访问Token
$token = (new Sobot(['app_id'=>'','app_key'=>'']))->token()->getToken();
```

#### 注意：
1. Token缓存需要自行实现
```php
use MuCTS\Sobot\Sobot;
use MuCTS\Sobot\Contracts\Cache as CacheInterface;

class Cache implements CacheInterface{
    public function set(string $key, $value, $tts): bool
    {
        // TODO 需要实现
    }
    public function get(string $key)
    {
        // TODO 需要实现
    }
    public function exists(string $key): bool
    {
        // TODO 需要实现
    }
}

// 获取访问Token
$token = (new Sobot(['app_id'=>'','app_key'=>''], new Cache()))->token()->getToken();
```

- [在线客服](https://www.sobot.com/developerdocs/service/online_service.html)
1. 请求人工客服
2. 客户咨询客服
3. 客服消息推送
4. 客户评价
5. 客户结束会话
6. 查询离线消息数据
7. 查询客户会话列表
8. 查询客户会话记录
9. 查询客服上下班时间
10. 查询客服实时数据
11. 查询在线技能组列表
12. 查询在线客服列表
13. 查询服务总结记录
14. 单点登录接口
```php
<?php
use MuCTS\Sobot\Sobot;
/** @var \MuCTS\Sobot\OnlineService\QueryAgent\Response $res */
$res = (new Sobot(['app_id'=>'','app_key'=>'']))
->onlineService()
->queryAgent()
->request();
```

- [在线统计](https://www.sobot.com/developerdocs/service/online_statistics.html)

1. 机器人会话统计
2. 机器人满意度统计
3. 人工会话统计
4. 人工满意度统计
5. 客户会话统计
6. 会话消息统计
7. 获取在线质检结果
8. 离线数据文件下载接口
9. 订单统计推送接口

- [机器人&知识库](https://www.sobot.com/developerdocs/service/knowledge_base.html)

1. 获取常见问题
2. 用户咨询机器人
3. 机器人回答评价
4. 查询知识库词条列表
5. 查询知识库分类列表
6. 查询知识库词条
7. 添加知识库词条
8. 修改知识库词条
9. 删除知识库词条

- [工单中心](https://www.sobot.com/developerdocs/service/work_order_center.html)

1. 查询数据字典
2. 查询自定义字段定义信息
3. 工单自定义字段（选择型）添加选项信息
4. 查询工单分类关联的工单模板
5. 创建工单（客户）
6. 创建工单（坐席）
7. 回复工单（客户）
8. 回复工单（坐席）
9. 附件上传（客户）
10. 附件上传（坐席）
11. 查询工单列表
12. 查询工单详情页
13. 查询工单统计概览
14. 查询工单坐席工作量
15. 查询工单消息推送异常数据
16. 离线数据文件下载接口

- [客户中心](https://www.sobot.com/developerdocs/service/customer_center.html)

1. 创建客户信息
2. 编辑客户信息
3. 根据邮箱查询客户信息
4. 根据手机号查询客户信息
5. 根据客户ID查询客户信息
6. 根据对接ID查询客户信息
7. 查询客户列表
8. 查询客户自定义字段信息
9. 查询自定义字段值
10. 查询客户固定字段信息
11. 查询客户中心企业列表

- [客服管理](https://www.sobot.com/developerdocs/service/server_management.html)

1. 查询坐席角色
2. 查询组织结构
3. 查询技能组
4. 新增技能组
5. 更新技能组
6. 删除技能组
7. 增加坐席到技能组
8. 删除技能组内坐席
9. 查询技能组内坐席
10. 查询坐席列表
11. 新增坐席信息
12. 更新坐席信息
13. 删除坐席信息


