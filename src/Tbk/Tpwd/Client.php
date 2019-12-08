<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Tpwd;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.tpwd.create (淘宝客-公用-淘口令生成)
     * @line https://open.taobao.com/api.htm?docId=31127&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function create(array $params)
    {
        $res = $this->httpPost('taobao.tbk.tpwd.create', $params);
        return $res;
    }

}
