<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Order;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.order.get (淘宝客订单查询)
     * @line https://open.taobao.com/api.htm?docId=24527&docType=2&scopeId=11650
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.order.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.relation.refund (淘宝客-推广者-维权退款订单查询)
     * @line https://open.taobao.com/api.htm?docId=40121&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getRefund(array $params)
    {
        if (isset($params['search_option']) && is_array($params['search_option'])) {
            $data['search_option'] = json_encode($params['search_option']);
        } elseif (is_array($params)) {
            $data['search_option'] = json_encode($params);
        } else {
            $data['search_option'] = $params;
        }
        $res = $this->httpPost('taobao.tbk.relation.refund', $data);
        return $res;
    }

    /**
     * taobao.tbk.order.details.get (淘宝客-推广者-所有订单查询)
     * @line https://open.taobao.com/api.htm?docId=43328&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getDetails(array $params)
    {
        $res = $this->httpPost('taobao.tbk.order.details.get', $params);
        return $res;
    }
}
