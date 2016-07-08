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

use PHPUnit_Framework_TestCase;

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnit_Framework_MockObject_MockObject|\Zend\ServiceManager\ServiceManager
     */
    private $serviceManager;

    public function setUp()
    {
        $this->serviceManager = ServiceManagerFactory::getServiceManager();

        /* @var $application \Zend\Mvc\Application */
        $application = $this->serviceManager->get('Application');
        $application->bootstrap();
    }

    protected function getServiceLocator()
    {
        return $this->serviceManager;
    }
}
