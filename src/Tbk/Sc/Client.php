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
     * taobao.tbk.sc.newuser.order.get (淘宝客-服务商-新用户订单明细查询)
     * @line https://open.taobao.com/api.htm?docId=33897&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getOrderNewUser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.newuser.order.get', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.material.optional (淘宝客-服务商-物料搜索)
     * @line https://open.taobao.com/api.htm?docId=35263&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptional(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.material.optional', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.newuser.order.sum (淘宝客-服务商-拉新活动对应数据查询)
     * @line https://open.taobao.com/api.htm?docId=36837&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function sumOrderNewUser(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.newuser.order.sum', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.optimus.material (淘宝客-服务商-物料精选)
     * @line https://open.taobao.com/api.htm?docId=37884&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function materialOptimus(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.optimus.material', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.publisher.info.save (淘宝客-公用-私域用户备案)
     * @line https://open.taobao.com/api.htm?docId=37988&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function savePublisherInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.publisher.info.save', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.publisher.info.get (淘宝客-公用-私域用户备案信息查询)
     * @line https://open.taobao.com/api.htm?docId=37989&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getPublisherInfo(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.publisher.info.get', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.invitecode.get (淘宝客-公用-私域用户邀请码生成)
     * @line https://open.taobao.com/api.htm?docId=38046&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getInviteCode(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.invitecode.get', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.message.send (淘宝客-服务商-手淘群发单)
     * @line https://open.taobao.com/api.htm?docId=38243&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function sendGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.message.send', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.create (淘宝客-服务商-手淘群创建)
     * @line https://open.taobao.com/api.htm?docId=38262&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function createGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.create', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.groupchat.get (淘宝客-服务商-手淘群查询)
     * @line https://open.taobao.com/api.htm?docId=38263&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getGroupchat(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.groupchat.get', $params, true);
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
        $res = $this->httpPost('taobao.tbk.offline.sc.info.save', $params, true);
        return $res;
    }

    /**
     * taobao.tbk.sc.activitylink.toolget (淘宝客-服务商-官方活动转链)
     * @line https://open.taobao.com/api.htm?docId=41921&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getActivityTool(array $params)
    {
        $res = $this->httpPost('taobao.tbk.sc.activitylink.toolget', $params, true);
        return $res;
    }

}
