<?php
require_once __DIR__ . '/../vendor/autoload.php';

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