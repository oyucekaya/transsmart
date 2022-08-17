<?php
/**
 * Created by PhpStorm.
 * User: Osman
 * Date: 16-5-2017
 * Time: 13:34
 */

namespace Transsmart\Model\Shipment;

class Shipment
{
    private $reference;
    private $action;
    private $version;
    private $pickupDateFrom;
    private $pickupDateTo;
    private $startIndex;

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     *
     * @return Shipment
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     *
     * @return Shipment
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     *
     * @return Shipment
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupDateFrom()
    {
        return $this->pickupDateFrom;
    }

    /**
     * @param mixed $pickupDateFrom
     *
     * @return Shipment
     */
    public function setPickupDateFrom($pickupDateFrom)
    {
        $this->pickupDateFrom = $pickupDateFrom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupDateTo()
    {
        return $this->pickupDateTo;
    }

    /**
     * @param mixed $pickupDateTo
     *
     * @return Shipment
     */
    public function setPickupDateTo($pickupDateTo)
    {
        $this->pickupDateTo = $pickupDateTo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartIndex()
    {
        return $this->startIndex;
    }

    /**
     * @param mixed $startIndex
     *
     * @return Shipment
     */
    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
        return $this;
    }
}
