<?php
/**
 * Created by PhpStorm.
 * User: Osman
 * Date: 16-5-2017
 * Time: 13:36
 */

namespace Transsmart\Model\Shipment;

class StatusShipment
{
    private $referenceType;

    /**
     * @return mixed
     */
    public function getReferenceType()
    {
        return $this->referenceType;
    }

    /**
     * @param mixed $referenceType
     */
    public function setReferenceType($referenceType)
    {
        $this->referenceType = $referenceType;
    }
}
