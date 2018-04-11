<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Item;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.item.get (淘宝客商品查询)
     * @line http://open.taobao.com/docs/api.htm?apiId=24515
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.item.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.item.convert (淘宝客商品链接转换)
     * @line http://open.taobao.com/docs/api.htm?apiId=24516
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function convert(array $params)
    {
        $res = $this->httpPost('taobao.tbk.item.convert', $params);
        return $res;
    }

    /**
     * taobao.tbk.item.recommend.get (淘宝客商品关联推荐查询)
     * @line http://open.taobao.com/docs/api.htm?apiId=24517
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getRecommend(array $params)
    {
        $res = $this->httpPost('taobao.tbk.item.recommend.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.item.info.get (淘宝客商品详情（简版）)
     * @line http://open.taobao.com/docs/api.htm?apiId=24518
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.item.info.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.item.guess.like (淘宝客商品猜你喜欢)
     * @line http://open.taobao.com/docs/api.htm?apiId=29528
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function likeGuess(array $params)
    {
        $res = $this->httpPost('taobao.tbk.item.guess.like', $params);
        return $res;
    }
}
