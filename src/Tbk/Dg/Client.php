<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Dg;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.dg.item.coupon.get (好券清单API【导购】)
     * @line http://open.taobao.com/docs/api.htm?apiId=29821
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getCoupon(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.item.coupon.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.newuser.order.get (淘宝客新用户订单API--导购)
     * @line http://open.taobao.com/docs/api.htm?apiId=33892
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getOrderNewuser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.newuser.order.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.material.optional (通用物料搜索API（导购）)
     * @line http://open.taobao.com/docs/api.htm?apiId=35896
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function optionalMaterial(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.newuser.order.get', $params);
        return $res;
    }
}
