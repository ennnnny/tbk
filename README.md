# 阿里淘宝客SDK
[![Latest Stable Version](https://poser.pugx.org/ennnnny/tbk/v/stable)](https://packagist.org/packages/ennnnny/tbk)
[![Total Downloads](https://poser.pugx.org/ennnnny/tbk/downloads)](https://packagist.org/packages/ennnnny/tbk)
![php>=5.6](https://img.shields.io/badge/php->%3D5.6-orange.svg?maxAge=2592000)
[![License](https://poser.pugx.org/ennnnny/tbk/license)](https://packagist.org/packages/ennnnny/tbk)

> 可能是最优雅、简易的淘宝客SDK

## 安装

```shell
composer require ennnnny/tbk
```

## 使用

```php
<?php

use ETaobao\Factory;

$config = [
    'appkey' => '',
    'secretKey' => '',
    'format' => 'json',
    'session' => '',//授权接口（sc类的接口）需要带上
    'sandbox' => false,
];

$app = Factory::Tbk($config);
$param = [
   'fields' => 'num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick',
   'q' => '蚊香'
];
$res = $app->item->get($param);

print_r($res);
```

## 说明文档

| 接口名称  | 对应方法  |
| --------   | ---- |
| taobao.tbk.item.get (淘宝客商品查询)     | \$app->item->get() |
| taobao.tbk.item.convert (淘宝客商品链接转换)[**官网貌似已移除此接口**]    | \$app->item->convert()   |
| taobao.tbk.item.recommend.get (淘宝客商品关联推荐查询)        |    \$app->item->getRecommend()  |
| taobao.tbk.item.info.get (淘宝客商品详情（简版）)        |    \$app->item->getInfo()  |
| taobao.tbk.shop.get (淘宝客店铺查询)        |    \$app->shop->get()  |
| taobao.tbk.shop.recommend.get (淘宝客店铺关联推荐查询)        |    \$app->shop->getRecommend()  |
| taobao.tbk.rebate.auth.get (淘宝客返利授权查询)[**官网貌似已移除此接口**]        |    \$app->rebate->getAuth()  |
| taobao.tbk.rebate.order.get (淘宝客返利订单查询)[**官网貌似已移除此接口**]       |    \$app->rebate->getOrder()  |
| taobao.tbk.uatm.event.get (枚举正在进行中的定向招商的活动列表)[**官网貌似已移除此接口**]        |    \$app->uatm->getEvent()  |
| taobao.tbk.uatm.event.item.get (获取淘宝联盟定向招商的宝贝信息)[**官网貌似已移除此接口**]  |    \$app->uatm->getItemEvent()  |
| taobao.tbk.uatm.favorites.item.get (获取淘宝联盟选品库的宝贝信息)   |    \$app->uatm->getItemFavorites()  |
| taobao.tbk.uatm.favorites.get (获取淘宝联盟选品库列表)   |    \$app->uatm->getFavorites()  |
| taobao.tbk.ju.tqg.get (淘抢购api)    |    \$app->ju->getTqg()  |
| taobao.tbk.item.click.extract (链接解析api)    |    \$app->item->clickExtract()  |
| taobao.tbk.spread.get (物料传播方式获取)[**官网貌似已移除此接口**]    |    \$app->spread->get()  |
| taobao.tbk.item.guess.like (淘宝客商品猜你喜欢)   |    \$app->item->likeGuess()  |
| taobao.tbk.dg.item.coupon.get (好券清单API【导购】)    |    \$app->dg->getCoupon()  |
| taobao.tbk.coupon.get (阿里妈妈推广券信息查询)   |    \$app->coupon->get()  |
| taobao.tbk.tpwd.create (淘宝客淘口令)     |    \$app->tpwd->create()  |
| taobao.tbk.content.get (淘客媒体内容输出)[**官网貌似已移除此接口**]    |    \$app->content->get()  |
| taobao.tbk.dg.newuser.order.get (淘宝客新用户订单API--导购)    |    \$app->dg->getOrderNewUser()  |
| taobao.tbk.sc.newuser.order.get (淘宝客新用户订单API--社交)     |    \$app->sc->getOrderNewUser()  |
| taobao.tbk.sc.material.optional (通用物料搜索API)[**官网貌似已移除此接口**]     |    \$app->sc->materialOptional()  |
| taobao.tbk.dg.optimus.material (淘宝客物料下行-导购)     |    \$app->dg->materialOptimus()  |
| taobao.tbk.dg.material.optional (通用物料搜索API（导购）)     |    \$app->dg->materialOptional()  |
| taobao.tbk.dg.newuser.order.sum (拉新活动汇总API--导购)     |    \$app->dg->sumOrderNewUser()  |
| taobao.tbk.sc.newuser.order.sum (拉新活动汇总API--社交)     |    \$app->sc->sumOrderNewUser()  |
| taobao.tbk.sc.optimus.material (淘宝客擎天柱通用物料API - 社交)     |    \$app->sc->materialOptimus()  |
| taobao.tbk.sc.publisher.info.save (淘宝客渠道信息备案 - 社交)[**官网貌似已移除此接口**]     |    \$app->sc->savePublisherInfo()  |
| taobao.tbk.sc.publisher.info.get (淘宝客信息查询 - 社交)[**官网貌似已移除此接口**]     |    \$app->sc->getPublisherInfo()  |
| taobao.tbk.sc.invitecode.get (淘宝客邀请码生成-社交)[**官网貌似已移除此接口**]     |    \$app->sc->getInviteCode()  |
| taobao.tbk.sc.groupchat.message.send( 手淘群发单 )[**官网貌似已移除此接口**]     |    \$app->sc->sendGroupchat()  |
| taobao.tbk.sc.groupchat.create( 手淘群创建 )[**官网貌似已移除此接口**]     |    \$app->sc->createGroupchat()  |
| taobao.tbk.sc.groupchat.get( 手淘群查询 )[**官网貌似已移除此接口**]     |    \$app->sc->getGroupchat()  |
| taobao.tbk.offline.sc.info.save( 线下新零售渠道备案 )[**官网貌似已移除此接口**]     |    \$app->sc->saveOfflineInfo()  |
| taobao.tbk.dg.vegas.tlj.create( 淘礼金创建 )[**官网貌似已移除此接口**]     |    \$app->dg->createTlj()  |
| taobao.tbk.activitylink.get( 淘宝联盟官方活动推广API-媒体 )     |    \$app->content->getActivityLink()  |
| taobao.tbk.sc.activitylink.toolget( 淘宝联盟官方活动推广API-工具 )     |    \$app->sc->getActivityTool()  |
| taobao.tbk.dg.punish.order.get( 处罚订单查询 -导购-私域用户管理专用 )     |    \$app->dg->getPunishOrder()  |
| taobao.tbk.order.get( 淘宝客订单查询 )     |    \$app->order->get()  |
| taobao.tbk.relation.refund( 淘宝客-推广者-维权退款订单查询 )     |    \$app->order->getRefund()  |
| taobao.tbk.order.details.get( 淘宝客-推广者-所有订单查询 )    |   \$app->order->getDetails()   |

## 支持

- 官方API文档： http://open.taobao.com/docs/api.htm?apiId=24515
- 淘宝客订单API： https://open.taobao.com/api.htm?docId=24527&docType=2&scopeId=11650
- composer： https://getcomposer.org/

## License

MIT
