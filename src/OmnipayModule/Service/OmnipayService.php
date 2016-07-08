<?php

/*
 * This file is part of the Omnipay Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OmnipayModule\Service;

use Omnipay\Common\GatewayFactory;

class OmnipayService
{

    /**
     * @var GatewayFactory
     */
    private $factory;

    /**
     * @var array
     */
    private $config;

    /**
     * OmnipayService constructor.
     *
     * @param GatewayFactory $factory
     * @param $config
     */
    public function __construct(GatewayFactory $factory, $config)
    {
        $this->factory = $factory;
        $this->config = $config;
    }

    public function gateway($name = null)
    {
        $gateway = $this->factory->create($this->config['gateways'][$name]['factory']);
        $gateway->initialize($this->config['gateways'][$name]);

        return $gateway;
    }
}
