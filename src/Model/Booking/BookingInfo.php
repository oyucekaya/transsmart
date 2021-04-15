<?php

namespace Transsmart\Model\Booking;

class BookingInfo
{
    /** @var Booking  */
    private $bookingInfo;
    /** @var Shipment  */
    private $shipmentInfo;
    /** @var DeliveryNote  */
    private $deliveryNoteInfo;

    public function __construct(Booking $booking, Shipment $shipment, DeliveryNote $deliveryNote)
    {
        $this->bookingInfo = $booking;
        $this->shipmentInfo = $shipment;
        $this->deliveryNoteInfo = $deliveryNote;
    }

    /**
     * @return Booking
     */
    public function getBookingInfo(): Booking
    {
        return $this->bookingInfo;
    }

    /**
     * @param Booking $bookingInfo
     *
     * @return BookingInfo
     */
    public function setBookingInfo(Booking $bookingInfo): BookingInfo
    {
        $this->bookingInfo = $bookingInfo;

        return $this;
    }

    /**
     * @return Shipment
     */
    public function getShipmentInfo(): Shipment
    {
        return $this->shipmentInfo;
    }

    /**
     * @param Shipment $shipmentInfo
     *
     * @return BookingInfo
     */
    public function setShipmentInfo(Shipment $shipmentInfo): BookingInfo
    {
        $this->shipmentInfo = $shipmentInfo;

        return $this;
    }

    /**
     * @return DeliveryNote
     */
    public function getDeliveryNoteInfo(): DeliveryNote
    {
        return $this->deliveryNoteInfo;
    }

    /**
     * @param DeliveryNote $deliveryNoteInfo
     *
     * @return BookingInfo
     */
    public function setDeliveryNoteInfo(DeliveryNote $deliveryNoteInfo): BookingInfo
    {
        $this->deliveryNoteInfo = $deliveryNoteInfo;

        return $this;
    }
}
