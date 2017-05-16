<?php
namespace Transsmart\Service;

use ReflectionClass;
use SoapClient;
use Transsmart\Model\Booking\Booking;
use Transsmart\Model\Booking\BookingInfo;
use Transsmart\Model\Booking\DeliveryNote;
use Transsmart\Model\Booking\Shipment;
use Transsmart\Model\RequestBody;

class TranssmartService
{
    /**
     * @var SoapClient
     */
    private $soapClient;

    public function __construct(SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function doBooking(Booking $booking, Shipment $shipment, DeliveryNote $deliveryNote)
    {
        $bookingInfo = new BookingInfo($booking, $shipment, $deliveryNote);

        $bookingInfo = $this->toArray($bookingInfo);
        return $this->soapClient->doBooking($bookingInfo);
    }

    public function getDocs(RequestBody $requestBody)
    {
        $document = $this->toArray($requestBody);
        return $this->soapClient->getDocs($document);
    }

    public function getStatus(RequestBody $requestBody)
    {
        $status = $this->toArray($requestBody);
        return $this->soapClient->getStatus($status);
    }

    public function doDelete(RequestBody $requestBody)
    {
        $delete = $this->toArray($requestBody);
        return $this->soapClient->doDelete($delete);
    }

    private function toArray($class)
    {
        $array = [];
        $refl = new ReflectionClass($class);

        $props = $refl->getProperties();

        foreach ($props as $prop) {
            $prop->setAccessible(true);
            $name = $prop->getName();
            $value = $prop->getValue($class);

            if (is_object($value)) {
                $array[$name] = $this->toArray($value);
            } elseif (is_array($value)) {
                foreach ($value as $key => $val) {
                    $array[$name][$key] = $this->toArray($val);
                }
            } else {
                $array[$name] = $value;
            }
        }

        return $array;
    }
}