<?php
namespace Transsmart\Model\Booking;

class Shipment
{
    /** @var  string */
    private $reference ='';
    /** @var  int */
    private $awb = '';
    /** @var  string */
    private $trackingUrl = '';
    /** @var  string */
    private $description = '';

    ///** @var Measurement */
    //private $measurements;

    /** @var  string */
    private $valueCurrency;
    /** @var  string */
    private $pickupDate;
    /** @var  string */
    private $pickupTime;
    /** @var  string */
    private $pickupTimeTo;
    /** @var  string */
    private $requestedDeliveryDate;
    /** @var  string */
    private $requestedDeliveryTime;
    /** @var  string */
    private $requestedDeliveryTimeTo;
    /** @var  string */
    private $service = '';
    /** @var  string */
    private $serviceLevelTime;
    /** @var  string */
    private $serviceLevelOther;
    /** @var  string */
    private $incoterms;
    /** @var  int */
    private $inbound;
    /** @var  int */
    private $noOfPackages;

    /** @var array shipmentLines */
    private $shipmentLines = [];

    /** @var Addresses $addresses */
    private $addresses;


    public function __construct(Addresses $addresses, $measurements = null)
    {
        $this->measurements = $measurements;
        $this->addresses = $addresses;
    }

    public function addShipmentLine(ShipmentLine $shipmentLine)
    {
        $this->shipmentLines[] = $shipmentLine;
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return Shipment
     */
    public function setReference(string $reference): Shipment
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return int
     */
    public function getAwb(): int
    {
        return $this->awb;
    }

    /**
     * @param int $awb
     *
     * @return Shipment
     */
    public function setAwb(int $awb): Shipment
    {
        $this->awb = $awb;

        return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrl(): string
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     *
     * @return Shipment
     */
    public function setTrackingUrl(string $trackingUrl): Shipment
    {
        $this->trackingUrl = $trackingUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Shipment
     */
    public function setDescription(string $description): Shipment
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Measurement
     */
    public function getMeasurements(): Measurement
    {
        return $this->measurements;
    }

    /**
     * @param Measurement $measurements
     *
     * @return Shipment
     */
    public function setMeasurements(Measurement $measurements): Shipment
    {
        $this->measurements = $measurements;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueCurrency(): string
    {
        return $this->valueCurrency;
    }

    /**
     * @param string $valueCurrency
     *
     * @return Shipment
     */
    public function setValueCurrency(string $valueCurrency): Shipment
    {
        $this->valueCurrency = $valueCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     *
     * @return Shipment
     */
    public function setPickupDate(string $pickupDate): Shipment
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTime(): string
    {
        return $this->pickupTime;
    }

    /**
     * @param string $pickupTime
     *
     * @return Shipment
     */
    public function setPickupTime(string $pickupTime): Shipment
    {
        $this->pickupTime = $pickupTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimeTo(): string
    {
        return $this->pickupTimeTo;
    }

    /**
     * @param string $pickupTimeTo
     *
     * @return Shipment
     */
    public function setPickupTimeTo(string $pickupTimeTo): Shipment
    {
        $this->pickupTimeTo = $pickupTimeTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryDate(): string
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @param string $requestedDeliveryDate
     *
     * @return Shipment
     */
    public function setRequestedDeliveryDate(string $requestedDeliveryDate): Shipment
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryTime(): string
    {
        return $this->requestedDeliveryTime;
    }

    /**
     * @param string $requestedDeliveryTime
     *
     * @return Shipment
     */
    public function setRequestedDeliveryTime(string $requestedDeliveryTime): Shipment
    {
        $this->requestedDeliveryTime = $requestedDeliveryTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryTimeTo(): string
    {
        return $this->requestedDeliveryTimeTo;
    }

    /**
     * @param string $requestedDeliveryTimeTo
     *
     * @return Shipment
     */
    public function setRequestedDeliveryTimeTo(string $requestedDeliveryTimeTo): Shipment
    {
        $this->requestedDeliveryTimeTo = $requestedDeliveryTimeTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getService(): string
    {
        return $this->service;
    }

    /**
     * @param string $service
     *
     * @return Shipment
     */
    public function setService(string $service): Shipment
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceLevelTime(): string
    {
        return $this->serviceLevelTime;
    }

    /**
     * @param string $serviceLevelTime
     *
     * @return Shipment
     */
    public function setServiceLevelTime(string $serviceLevelTime): Shipment
    {
        $this->serviceLevelTime = $serviceLevelTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getIncoterms(): string
    {
        return $this->incoterms;
    }

    /**
     * @param string $incoterms
     *
     * @return Shipment
     */
    public function setIncoterms(string $incoterms): Shipment
    {
        $this->incoterms = $incoterms;

        return $this;
    }

    /**
     * @return int
     */
    public function getInbound(): int
    {
        return $this->inbound;
    }

    /**
     * @param int $inbound
     *
     * @return Shipment
     */
    public function setInbound(int $inbound): Shipment
    {
        $this->inbound = $inbound;

        return $this;
    }

    /**
     * @return int
     */
    public function getNoOfPackages(): int
    {
        return $this->noOfPackages;
    }

    /**
     * @param int $noOfPackages
     *
     * @return Shipment
     */
    public function setNoOfPackages(int $noOfPackages): Shipment
    {
        $this->noOfPackages = $noOfPackages;

        return $this;
    }

    /**
     * @return array
     */
    public function getShipmentLines(): array
    {
        return $this->shipmentLines;
    }

    /**
     * @param array $shipmentLines
     *
     * @return Shipment
     */
    public function setShipmentLines(array $shipmentLines): Shipment
    {
        $this->shipmentLines = $shipmentLines;

        return $this;
    }

    /**
     * @return Addresses
     */
    public function getAddresses(): Addresses
    {
        return $this->addresses;
    }

    /**
     * @param Addresses $addresses
     *
     * @return Shipment
     */
    public function setAddresses(Addresses $addresses): Shipment
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceLevelOther(): string
    {
        return $this->serviceLevelOther;
    }

    /**
     * @param string $serviceLevelOther
     */
    public function setServiceLevelOther(string $serviceLevelOther)
    {
        $this->serviceLevelOther = $serviceLevelOther;
    }


}