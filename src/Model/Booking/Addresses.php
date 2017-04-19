<?php
namespace Transsmart\Model\Booking;

class Addresses
{
    private $address = [];

    public function __construct(Address $sender, Address $receiver, Address $invoice)
    {
        $this->address[] = $sender;
        $this->address[] = $receiver;
        $this->address[] = $invoice;
    }
}