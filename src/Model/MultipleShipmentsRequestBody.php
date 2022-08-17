<?php

namespace Transsmart\Model;

use Transsmart\Model\Shipment\Shipment;

class MultipleShipmentsRequestBody
{
    private $shipmentsInfo;

    /**
     * @param Shipment $shipment
     */
    public function __construct(Shipment $shipment)
    {
        $this->shipmentsInfo = $shipment;
    }
}
