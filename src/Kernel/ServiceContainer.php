<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Kernel;

use Pimple\Container;

/**
 * Class ServiceContainer.
 *
 * @author ennnnny <kuye1130@gmail.com>
 *
 */
class ServiceContainer extends Container
{
    /**
     * @var array
     */
    protected $providers = [];

    /**
     * @var array
     */
    protected $defaultConfig = [
        'appkey' => '',
        'secretKey' => '',
        'api_uri' => 'https://eco.taobao.com/router/rest',
        'api_box_uri' => 'https://gw.api.tbsandbox.com/router/rest',
        'format' => 'json',
        'signMethod' => 'md5',
        'apiVersion' => '2.0',
        'sandbox' => false,
    ];

    /**
     * @var array
     */
    protected $userConfig = [];

    /**
     * Constructor.
     *
     * @param array $config
     * @param array $prepends
     */
    public function __construct(array $config = [], array $prepends = [])
    {
        $this->registerProviders($this->getProviders());

        parent::__construct($prepends);

        if (isset($config['signMethod'])) {
            unset($config['signMethod']);
        }
        $this->userConfig = $config;

    }

    /**
     * @return array
     */
    public function getConfig()
    {
        return array_merge($this->defaultConfig, $this->userConfig);
    }

    /**
     * Return all providers.
     *
     * @return array
     */
    public function getProviders()
    {
        return array_merge([], $this->providers);
    }

    /**
     * Magic get access.
     *
     * @param string $id
     *
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }

    /**
     * Magic set access.
     *
     * @param string $id
     * @param mixed $value
     */
    public function __set($id, $value)
    {
        $this->offsetSet($id, $value);
    }

    /**
     * @param array $providers
     */
    public function registerProviders(array $providers)
    {
        foreach ($providers as $provider) {
            parent::register(new $provider());
        }
    }
}
