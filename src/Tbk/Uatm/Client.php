<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Uatm;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.uatm.event.get (枚举正在进行中的定向招商的活动列表)
     * @line http://open.taobao.com/docs/api.htm?apiId=26449
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getEvent(array $params)
    {
        $res = $this->httpPost('taobao.tbk.uatm.event.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.uatm.event.item.get (获取淘宝联盟定向招商的宝贝信息)
     * @line http://open.taobao.com/docs/api.htm?apiId=26616
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getItemEvent(array $params)
    {
        $res = $this->httpPost('taobao.tbk.uatm.event.item.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.uatm.favorites.item.get (获取淘宝联盟选品库的宝贝信息)
     * @line http://open.taobao.com/docs/api.htm?apiId=26619
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getItemFavorites(array $params)
    {
        $res = $this->httpPost('taobao.tbk.uatm.favorites.item.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.uatm.favorites.get (获取淘宝联盟选品库列表)
     * @line http://open.taobao.com/docs/api.htm?apiId=26620
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getFavorites(array $params)
    {
        $res = $this->httpPost('taobao.tbk.uatm.favorites.get', $params);
        return $res;
    }
}
