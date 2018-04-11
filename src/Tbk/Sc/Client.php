<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Sc;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.sc.newuser.order.get (淘宝客新用户订单API--社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=33897
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getOrderNewuser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.newuser.order.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.material.optional (通用物料搜索API)
     * @line http://open.taobao.com/docs/api.htm?apiId=35263
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function optionalMaterial(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.material.optional', $params);
        return $res;
    }

}
