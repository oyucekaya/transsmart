<?php
namespace Transsmart\Factory;

use Interop\Container\ContainerInterface;
use SoapClient;

class TranssmartServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $factory = new TranssmartFactory();

        return $factory->getService($container->get('config'));
    }
}