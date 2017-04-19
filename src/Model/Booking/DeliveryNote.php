<?php
namespace Transsmart\Model\Booking;

class DeliveryNote
{
    /** @var string */
    private $currency;
    /** @var array */
    private $deliveryNoteLines = [];

    public function addDeliveryNoteLine(DeliveryNoteLine $deliveryNoteLine)
    {
        $this->deliveryNoteLines[] = $deliveryNoteLine;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}