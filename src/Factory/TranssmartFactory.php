<?php
namespace Transsmart\Factory;

use SoapClient;
use SoapHeader;
use Transsmart\Service\TranssmartService;

class TranssmartFactory
{
    public function getService(array $config)
    {
        $transsmartConfig = $config['transsmart'] ?? array();

        $soapClient = new SoapClient(
            $transsmartConfig['soapParameters']['url'],
            ['trace' => $transsmartConfig['soapParameters']['trace']]
        );

        $header = new SoapHeader(
            $transsmartConfig['soapParameters']['authUrl'],
            'authentication',
            $transsmartConfig['credentials'],
            false
        );

        $soapClient->__setSoapHeaders($header);

        return new TranssmartService($soapClient);
    }
}