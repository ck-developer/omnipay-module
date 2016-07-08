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

use Zend\ServiceManager\ServiceManager;
use Zend\Mvc\Service\ServiceManagerConfig;

class ServiceManagerFactory
{
    /**
     * @var array
     */
    protected static $config;
    /**
     * @param array $config
     */
    public static function setConfig(array $config)
    {
        static::$config = $config;
    }
    /**
     * Builds a new service manager
     *
     * @return \Zend\ServiceManager\ServiceManager
     */
    public static function getServiceManager()
    {
        $serviceManager = new ServiceManager();
        $serviceManagerConfig = new ServiceManagerConfig(
            isset(static::$config['service_manager']) ? static::$config['service_manager'] : array()
        );
        $serviceManagerConfig->configureServiceManager($serviceManager);
        $serviceManager->setService('ApplicationConfig', static::$config);
        /** @var $moduleManager \Zend\ModuleManager\ModuleManager */
        $moduleManager = $serviceManager->get('ModuleManager');
        $moduleManager->loadModules();

        return $serviceManager;
    }
}
