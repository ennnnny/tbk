<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Ju;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.ju.tqg.get (淘抢购api)
     * @line https://open.taobao.com/api.htm?docId=27543&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getTqg(array $params)
    {
        $res = $this->httpPost('taobao.tbk.ju.tqg.get', $params);
        return $res;
    }

}
