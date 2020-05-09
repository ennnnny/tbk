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
     * taobao.tbk.spread.get (淘宝客-公用-长链转短链)
     * @line https://open.taobao.com/api.htm?docId=27832&docType=2
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function getSpread(array $params)
    {
        if (isset($params['requests']) && is_array($params['requests'])) {
            foreach ($params['requests'] as &$item) {
                $item = json_encode($item);
            }
            $data['requests'] = json_encode($params['requests']);
        } else {
            $data['requests'] = $params;
        }
        $res = $this->httpPost('taobao.tbk.spread.get', $params);
        return $res;
    }
}
