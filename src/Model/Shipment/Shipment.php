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

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
}