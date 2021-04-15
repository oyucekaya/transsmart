<?php

namespace Transsmart\Factory;

use Psr\Container\ContainerInterface;

class TranssmartServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $factory = new TranssmartFactory();

        return $factory->getService($container->get('config'));
    }
}
