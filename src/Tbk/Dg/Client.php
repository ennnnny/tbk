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
    public function getOrderNewUser(array $params)
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
    public function materialOptional(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.material.optional', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.newuser.order.sum (拉新活动汇总API--社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=36836
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function sumOrderNewUser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.newuser.order.sum', $params);
        return $res;
    }

    /**
     * 通用物料推荐，传入官方公布的物料id，可获取指定物料
     * taobao.tbk.dg.optimus.material( 淘宝客物料下行-导购 )
     * @line http://open.taobao.com/api.htm?docId=33947&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptimus(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.optimus.material', $params);
        return $res;
    }

    /**
     * 创建淘礼金
     * taobao.tbk.dg.vegas.tlj.create( 淘礼金创建 )
     * @line http://open.taobao.com/api.htm?docId=40173&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function createTlj(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.vegas.tlj.create', $params);
        return $res;
    }
}
