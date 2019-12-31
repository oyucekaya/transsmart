<?php
namespace Transsmart\Model\Booking;

class DeliveryNoteInfo
{
    /** @var array */
    private $deliveryNoteLines;

    public function __construct(array $deliveryNoteLines)
    {
        $this->deliveryNoteLines = $deliveryNoteLines;
    }

    /**
     * @return array
     */
    public function getDeliveryNoteLines(): array
    {
        return $this->deliveryNoteLines;
    }

    /**
     * @param DeliveryNoteLine $deliveryNoteLine
     */
    public function addDeliveryNoteLine(DeliveryNoteLine $deliveryNoteLine)
    {
        $this->deliveryNoteLines =  $deliveryNoteLine;
    }
}
