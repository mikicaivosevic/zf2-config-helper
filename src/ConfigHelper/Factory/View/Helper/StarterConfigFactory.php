<?php

namespace ConfigHelper\Factory\View\Helper;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use \ConfigHelper\View\Helper\StarterConfig;

class StarterConfigFactory implements FactoryInterface {

    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return SiteConfigHelper
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->getServiceLocator()->get('Config');

        return new StarterConfig($config);
    }

}
