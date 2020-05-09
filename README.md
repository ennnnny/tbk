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
| taobao.tbk.item.get (淘宝客商品查询)[**官网貌似已移除此接口**]     | \$app->item->get() |
| taobao.tbk.item.convert (淘宝客-推广者-商品链接转换)    | \$app->item->convert()   |
| taobao.tbk.item.recommend.get (淘宝客-公用-商品关联推荐)        |    \$app->item->getRecommend()  |
| taobao.tbk.item.info.get (淘宝客-公用-淘宝客商品详情查询(简版))        |    \$app->item->getInfo()  |
| taobao.tbk.shop.get (淘宝客-推广者-店铺搜索)        |    \$app->shop->get()  |
| taobao.tbk.shop.recommend.get (淘宝客-公用-店铺关联推荐)        |    \$app->shop->getRecommend()  |
| taobao.tbk.rebate.auth.get (淘宝客-推广者-返利商家授权查询)        |    \$app->rebate->getAuth()  |
| taobao.tbk.rebate.order.get (淘宝客-推广者-返利订单查询)       |    \$app->rebate->getOrder()  |
| taobao.tbk.uatm.event.get (枚举正在进行中的定向招商的活动列表)[**官网貌似已移除此接口**]        |    \$app->uatm->getEvent()  |
| taobao.tbk.uatm.event.item.get (获取淘宝联盟定向招商的宝贝信息)[**官网貌似已移除此接口**]  |    \$app->uatm->getItemEvent()  |
| taobao.tbk.uatm.favorites.item.get (淘宝客-推广者-选品库宝贝信息)   |    \$app->uatm->getItemFavorites()  |
| taobao.tbk.uatm.favorites.get (淘宝客-推广者-选品库宝贝列表)   |    \$app->uatm->getFavorites()  |
| taobao.tbk.ju.tqg.get (淘抢购api)    |    \$app->ju->getTqg()  |
| taobao.tbk.item.click.extract (淘宝客-公用-链接解析出商品id)    |    \$app->item->clickExtract()  |
| taobao.tbk.spread.get (淘宝客-公用-长链转短链)    |    \$app->spread->getSpread()  |
| taobao.tbk.item.guess.like (淘宝客商品猜你喜欢)   |    \$app->item->likeGuess()  |
| taobao.tbk.dg.item.coupon.get (好券清单API【导购】)[**官网貌似已移除此接口**]    |    \$app->dg->getCoupon()  |
| taobao.tbk.coupon.get (淘宝客-公用-阿里妈妈推广券详情查询)   |    \$app->coupon->get()  |
| taobao.tbk.tpwd.create (淘宝客-公用-淘口令生成)     |    \$app->tpwd->create()  |
| taobao.tbk.content.get (淘宝客-推广者-图文内容输出)    |    \$app->content->get()  |
| taobao.tbk.dg.newuser.order.get (淘宝客-推广者-新用户订单明细查询)    |    \$app->dg->getOrderNewUser()  |
| taobao.tbk.sc.newuser.order.get (淘宝客-服务商-新用户订单明细查询)     |    \$app->sc->getOrderNewUser()  |
| taobao.tbk.sc.material.optional (淘宝客-服务商-物料搜索)     |    \$app->sc->materialOptional()  |
| taobao.tbk.dg.optimus.material (淘宝客-推广者-物料精选)     |    \$app->dg->materialOptimus()  |
| taobao.tbk.dg.material.optional (淘宝客-推广者-物料搜索)     |    \$app->dg->materialOptional()  |
| taobao.tbk.dg.newuser.order.sum (淘宝客-推广者-拉新活动对应数据查询)     |    \$app->dg->sumOrderNewUser()  |
| taobao.tbk.sc.newuser.order.sum (淘宝客-服务商-拉新活动对应数据查询)     |    \$app->sc->sumOrderNewUser()  |
| taobao.tbk.sc.optimus.material (淘宝客-服务商-物料精选)     |    \$app->sc->materialOptimus()  |
| taobao.tbk.sc.publisher.info.save (淘宝客-公用-私域用户备案)     |    \$app->sc->savePublisherInfo()  |
| taobao.tbk.sc.publisher.info.get (淘宝客-公用-私域用户备案信息查询)     |    \$app->sc->getPublisherInfo()  |
| taobao.tbk.sc.invitecode.get (淘宝客-公用-私域用户邀请码生成)     |    \$app->sc->getInviteCode()  |
| taobao.tbk.sc.groupchat.message.send(淘宝客-服务商-手淘群发单)     |    \$app->sc->sendGroupchat()  |
| taobao.tbk.sc.groupchat.create(淘宝客-服务商-手淘群创建)     |    \$app->sc->createGroupchat()  |
| taobao.tbk.sc.groupchat.get(淘宝客-服务商-手淘群查询)     |    \$app->sc->getGroupchat()  |
| taobao.tbk.offline.sc.info.save( 线下新零售渠道备案 )[**官网貌似已移除此接口**]     |    \$app->sc->saveOfflineInfo()  |
| taobao.tbk.content.effect.get( 淘宝客-推广者-图文内容效果数据 )     |    \$app->content->getEffect()  |
| taobao.tbk.dg.vegas.tlj.create( 淘宝客-推广者-淘礼金创建 )     |    \$app->dg->createTlj()  |
| taobao.tbk.activitylink.get( 淘宝客-推广者-官方活动转链 )     |    \$app->content->getActivityLink()  |
| taobao.tbk.sc.activitylink.toolget( 淘宝客-服务商-官方活动转链 )     |    \$app->sc->getActivityTool()  |
| taobao.tbk.dg.punish.order.get( 淘宝客-推广者-处罚订单查询 )     |    \$app->dg->getPunishOrder()  |
| taobao.tbk.order.get( 淘宝客订单查询 )[**官网貌似已移除此接口**]     |    \$app->order->get()  |
| taobao.tbk.relation.refund(淘宝客-推广者-维权退款订单查询)     |    \$app->order->getRefund()  |
| taobao.tbk.order.details.get(淘宝客-推广者-所有订单查询)    |   \$app->order->getDetails()   |
| taobao.tbk.dg.vegas.tlj.instance.report(淘宝客-推广者-淘礼金发放及使用报表)    |   \$app->dg->getTljReport()   |
| taobao.tbk.dg.wish.update(媒体导购单选品)    |   \$app->dg->updateWish()   |
| taobao.tbk.dg.wish.list(媒体淘客导购单查询)    |   \$app->dg->getWishList()   |
| taobao.tbk.activity.info.get(淘宝客-推广者-官方活动信息获取)    |   \$app->content->getActivityInfo()   |

## 支持

- 官方API文档： https://open.taobao.com/api.htm?docId=24517&docType=2
- 淘宝客订单API： https://open.taobao.com/api.htm?docId=43328&docType=2
- composer： https://getcomposer.org/

## License

MIT
