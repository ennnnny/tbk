<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk;

use ETaobao\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author overtrue <i@overtrue.me>
 *
 * @property \ETaobao\Tbk\Item\Client               $item
 * @property \ETaobao\Tbk\Shop\Client               $shop
 * @property \ETaobao\Tbk\Rebate\Client             $rebate
 * @property \ETaobao\Tbk\Uatm\Client               $uatm
 * @property \ETaobao\Tbk\Ju\Client                 $ju
 * @property \ETaobao\Tbk\Spread\Client             $spread
 * @property \ETaobao\Tbk\Dg\Client                 $dg
 * @property \ETaobao\Tbk\Coupon\Client             $coupon
 * @property \ETaobao\Tbk\Tpwd\Client               $tpwd
 * @property \ETaobao\Tbk\Content\Client            $content
 * @property \ETaobao\Tbk\Sc\Client                 $sc
 * @property \ETaobao\Tbk\Order\Client              $order
 */
class Application extends ServiceContainer
{
    /**
     * @var array
     */
    protected $providers = [
        Item\ServiceProvider::class,
        Shop\ServiceProvider::class,
        Rebate\ServiceProvider::class,
        Uatm\ServiceProvider::class,
        Ju\ServiceProvider::class,
        Spread\ServiceProvider::class,
        Dg\ServiceProvider::class,
        Coupon\ServiceProvider::class,
        Tpwd\ServiceProvider::class,
        Content\ServiceProvider::class,
        Sc\ServiceProvider::class,
        Order\ServiceProvider::class,
    ];
}
