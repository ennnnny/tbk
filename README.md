# 阿里淘宝客SDK

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

## 支持

- 官方API文档： http://open.taobao.com/docs/api.htm?apiId=24515
- composer： https://getcomposer.org/

## License

MIT
