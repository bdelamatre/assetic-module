<?php

namespace AsseticBundle\Factory;

use AsseticBundle\Configuration;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;

class ConfigurationFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $configuration = $serviceLocator->get('Configuration');

        return new Configuration($configuration['assetic_configuration']);
    }

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $configuration = $container->get('Configuration');

        return new Configuration($configuration['assetic_configuration']);
    }
}
