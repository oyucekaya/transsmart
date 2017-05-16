<?php
namespace Transsmart\Model;

use Transsmart\Model\Action\Action;
use Transsmart\Model\Shipment\Shipment;

class RequestBody
{
    private $shipmentInfo;
    private $actionInfo;

    /**
     * @param  Shipment $shipment
     * @param Action $action
     */
    public function __construct(Shipment $shipment, Action $action)
    {
        $this->shipmentInfo = $shipment;
        $this->actionInfo = $action;
    }
}