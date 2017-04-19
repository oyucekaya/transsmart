<?php

use Transsmart\Factory\TranssmartFactory;
use Transsmart\Model\Booking;
use Transsmart\Model\Booking\Address;
use Transsmart\Model\Booking\Addresses;
use Transsmart\Model\Booking\DeliveryNote;
use Transsmart\Model\Booking\Measurement;
use Transsmart\Model\Booking\ShipmentLine;

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

$measurement = new Measurement();
$measurement->setLength('10.00');
$measurement->setWidth('10.00');
$measurement->setHeight('10.00');
$measurement->setLength('10.00');
$measurement->setWeight('1.00');
$measurement->setSizeUom('CM');
$measurement->setWeightUom('KG');

$shipmentLine = new ShipmentLine($measurement);
$shipmentLine->setLineNo(1);
$shipmentLine->setPackageType('BOX');
$shipmentLine->setDescription('box');
$shipmentLine->setQuantity(1);

$sender =  new Address();
$sender->setType('SEND');
$sender->setName('Test');
$sender->setStreet1('Teststreet');
$sender->setCity('Testcity');
$sender->setHouseNo('141');
$sender->setZipCode('1111RF');
$sender->setCountryCode('NL');
$sender->setContact('Logistics');

$receiver =  new Address();
$receiver->setType('RECV');
$receiver->setName('transsmart');
$receiver->setStreet1('Teststreet');
$receiver->setCity('Testcity');
$receiver->setHouseNo('2');
$receiver->setZipCode('3600');
$receiver->setCountryCode('BE');

$invoice = clone($sender);
$invoice->setType('INVC');

$addresses = new Addresses($sender, $receiver, $invoice);

$shipment = new Booking\Shipment($addresses);
$shipment->setReference('Test');
$shipment->setValueCurrency('EUR');
$shipment->setPickupDate('2017-04-15');
$shipment->setService('NON-DOCS');
$shipment->setServiceLevelTime('TAXIPOST24H');
$shipment->setIncoterms('DAP');
$shipment->setInbound(0);
$shipment->setNoOfPackages(1);
$shipment->addShipmentLine($shipmentLine);

$deliveryNote = new DeliveryNote();
$deliveryNote->setCurrency('EUR');

$booking = new Booking\Booking();
$booking->setCarrier('BPO');
$booking->setExecutingCarrier('BPO');
$booking->setOrigin('APICLIENT');
$booking->setAction('doBooking');
$booking->setVersion('2.0');

$result = $transsmart->doBooking($booking, $shipment, $deliveryNote);


if ($result) {
    echo "Success - Response:" . PHP_EOL;
} else {
    echo "Error - something went wrong:".PHP_EOL;
}

var_dump($result);