<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Spread;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.spread.get (物料传播方式获取)
     * @line http://open.taobao.com/docs/api.htm?apiId=27832
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getSpread(array $params)
    {
        $res = $this->httpPost('taobao.tbk.spread.get', $params);
        return $res;
    }

}
