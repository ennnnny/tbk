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
    public function getOrderNewUser(array $params)
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
    public function materialOptional(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.material.optional', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.newuser.order.sum (拉新活动汇总API--社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=36837
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function sumOrderNewUser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.newuser.order.sum', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.optimus.material (淘宝客擎天柱通用物料API - 社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=37884
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptimus(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.optimus.material', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.publisher.info.save (淘宝客渠道信息备案 - 社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=37988
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function savePublisherInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.publisher.info.save', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.publisher.info.get (淘宝客信息查询 - 社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=37989
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getPublisherInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.publisher.info.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.invitecode.get (淘宝客邀请码生成-社交)
     * @line http://open.taobao.com/docs/api.htm?apiId=38046
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getInviteCode(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.invitecode.get', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.message.send (手淘群发单)
     * @line http://open.taobao.com/api.htm?docId=38243
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function sendGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.message.send', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.create (手淘群创建)
     * @line http://open.taobao.com/api.htm?docId=38262
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function createGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.create', $params);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.get (手淘群查询)
     * @line http://open.taobao.com/api.htm?docId=38263
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.get', $params);
        return $res;
    }

    /**
     * 线下新零售渠道备案
     * taobao.tbk.offline.sc.info.save( 线下新零售渠道备案 )
     * @line http://open.taobao.com/api.htm?docId=40129&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function saveOfflineInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.offline.sc.info.save', $params);
        return $res;
    }
}
