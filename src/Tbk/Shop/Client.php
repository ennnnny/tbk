<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Shop;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{
    /**
     * taobao.tbk.shop.get (淘宝客店铺查询)
     * @line http://open.taobao.com/docs/api.htm?apiId=24521
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.shop.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.shop.recommend.get (淘宝客店铺关联推荐查询)
     * @line http://open.taobao.com/docs/api.htm?apiId=24522
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getRecommend(array $params)
    {
        $res = $this->httpPost('taobao.tbk.shop.recommend.get', $params);
        return $res;
    }
}
