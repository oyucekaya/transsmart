<?php

use Transsmart\Factory\TranssmartFactory;
use Transsmart\Model\Action\Action;
use Transsmart\Model\RequestBody;
use Transsmart\Model\Shipment\Shipment;

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'transsmart' => [
        'credentials' => [
            'userId' => '',
            'password' => '',
            'customerId' => '',
        ],
        'soapParameters' => [
            //The url for the WSDL
            'url' => '',
            //The url for authentication for type SoapHeader
            'authUrl' => '',
            'trace' => true,
        ],
    ],
];

$transsmartFactory =  new TranssmartFactory();
$transsmart = $transsmartFactory->getService($config);


$shipment = new Shipment();
$shipment->setReference('Test');
$action = new Action();
$document = new RequestBody($shipment, $action);


$result = $transsmart->getDocs($document);

if ($result) {
    echo "Success - Response:" . PHP_EOL;
} else {
    echo "Error - something went wrong:".PHP_EOL;
}

var_dump($result);