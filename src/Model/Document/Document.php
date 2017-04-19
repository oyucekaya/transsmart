<?php
namespace Transsmart\Model\Document;

class Document
{
    private $shipmentInfo;
    private $actionInfo;

    public function __construct(Shipment $shipment, Action $action)
    {
        $this->shipmentInfo = $shipment;
        $this->actionInfo = $action;
    }


}