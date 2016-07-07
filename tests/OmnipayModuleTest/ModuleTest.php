<?php

/*
 * This file is part of the Omnipay Module for Zend Framework 2.
 *
 * (c) Claude Khedhiri <claude@khedhiri.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OmnipayModuleTest;

use OmnipayModule\Module;

class ModuleTest extends TestCase
{

    public function testConfig()
    {
        $config = $this->getServiceLocator()->get('config');

        $this->assertInternalType('array', $config);
        $this->assertArrayHasKey('omnipay', $config);
        $this->assertArrayHasKey('gateways', $config['omnipay']);
    }

    public function testService()
    {
        $omnipay = $this->getServiceLocator()->get('omnipay');

        $this->assertInstanceOf('OmnipayModule\Service\OmnipayService', $omnipay);
    }
}
