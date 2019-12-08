<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Coupon;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{
    /**
     * taobao.tbk.coupon.get (淘宝客-公用-阿里妈妈推广券详情查询)
     * @line https://open.taobao.com/api.htm?docId=31106&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.coupon.get', $params);
        return $res;
    }
}
