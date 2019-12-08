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
     * @line http://open.taobao.com/docs/api.htm?apiId=29821&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getCoupon(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.item.coupon.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.newuser.order.get (淘宝客-推广者-新用户订单明细查询)
     * @line https://open.taobao.com/api.htm?docId=33892&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getOrderNewUser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.newuser.order.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.material.optional (淘宝客-推广者-物料搜索)
     * @line https://open.taobao.com/api.htm?docId=35896&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptional(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.material.optional', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.newuser.order.sum (淘宝客-推广者-拉新活动对应数据查询)
     * @line https://open.taobao.com/api.htm?docId=36836&docType=2
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
     * taobao.tbk.dg.optimus.material( 淘宝客-推广者-物料精选 )
     * @line https://open.taobao.com/api.htm?docId=33947&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptimus(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.optimus.material', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.vegas.tlj.create( 淘宝客-推广者-淘礼金创建 )
     * @line https://open.taobao.com/api.htm?docId=40173&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function createTlj(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.vegas.tlj.create', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.punish.order.get (淘宝客-推广者-处罚订单查询)
     * @line https://open.taobao.com/api.htm?docId=42050&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getPunishOrder(array $params)
    {
        if (isset($params['af_order_option']) && is_array($params['af_order_option'])) {
            $data['af_order_option'] = json_encode($params['af_order_option']);
        } elseif (is_array($params)) {
            $data['af_order_option'] = json_encode($params);
        } else {
            $data['af_order_option'] = $params;
        }
        $res = $this->httpPost('taobao.tbk.dg.punish.order.get', $data);
        return $res;
    }

    /**
     * taobao.tbk.dg.vegas.tlj.instance.report (淘宝客-推广者-淘礼金发放及使用报表)
     * @link https://open.taobao.com/api.htm?docId=43317&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getTljReport(array $params)
    {
        $res = $this->httpPost('taobao.tbk.dg.vegas.tlj.instance.report', $params);
        return $res;
    }

    /**
     * taobao.tbk.dg.wish.update (媒体导购单选品)
     * @link https://open.taobao.com/api.htm?docId=46750&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function updateWish(array $params)
    {
        if (isset($params['param0']) && is_array($params['param0'])) {
            $data['param0'] = json_encode($params['param0']);
        } elseif (is_array($params)) {
            $data['param0'] = json_encode($params);
        } else {
            $data['param0'] = $params;
        }
        $res = $this->httpPost('taobao.tbk.dg.wish.update', $data);
        return $res;
    }

    /**
     * taobao.tbk.dg.wish.list( 媒体淘客导购单查询 )
     * @link https://open.taobao.com/api.htm?docId=46751&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getWishList(array $params)
    {
        if (isset($params['param0']) && is_array($params['param0'])) {
            $data['param0'] = json_encode($params['param0']);
        } elseif (is_array($params)) {
            $data['param0'] = json_encode($params);
        } else {
            $data['param0'] = $params;
        }
        $res = $this->httpPost('taobao.tbk.dg.wish.list', $data);
        return $res;
    }
}
