<?php
require_once __DIR__ . '/../vendor/autoload.php';

use ETaobao\Factory;

$config = [
    'appkey' => '',
    'secretKey' => '',
    'format' => 'json',
    'session' => '',
    'sandbox' => false,
];
$app = Factory::Tbk($config);
$param = [
    'text' => '长度大于5个字符',
    'url' => 'https://uland.taobao.com/'
];
$res = $app->tpwd->create($param);


print_r($res);
