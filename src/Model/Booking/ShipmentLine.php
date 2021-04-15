<?php

namespace Transsmart\Model\Booking;

class ShipmentLine
{
    /** @var  int */
    private $lineNo;
    /** @var  string */
    private $shipmentLineId;

    /** @var  int */
    private $awb = '';

    /** @var  string */
    private $packageType;
    /** @var  string */
    private $description;
    /** @var  int */
    private $quantity;
    /** @var  int */
    private $stackable = 0;
    /** @var  float */
    private $stackheight = 0;

    /** @var Measurement  */
    private $measurements;

    /** @var  int */
    private $dangerousGoods = null;
    /** @var  int */
    private $dangerousGoodsGds = null;
    /** @var  DeliveryNoteInfo */
    private $deliveryNoteInfo;


    public function __construct(Measurement $measurement)
    {
        $this->measurements = $measurement;
    }

    /**
     * @return int
     */
    public function getLineNo(): int
    {
        return $this->lineNo;
    }

    /**
     * @param int $lineNo
     *
     * @return ShipmentLine
     */
    public function setLineNo(int $lineNo): ShipmentLine
    {
        $this->lineNo = $lineNo;

        return $this;
    }

    /**
     * @return int
     */
    public function getAwb(): int
    {
        return $this->awb;
    }

    /**
     * @param int $awb
     *
     * @return ShipmentLine
     */
    public function setAwb(int $awb): ShipmentLine
    {
        $this->awb = $awb;

        return $this;
    }

    /**
     * @return string
     */
    public function getPackageType(): string
    {
        return $this->packageType;
    }

    /**
     * @param string $packageType
     *
     * @return ShipmentLine
     */
    public function setPackageType(string $packageType): ShipmentLine
    {
        $this->packageType = $packageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return ShipmentLine
     */
    public function setDescription(string $description): ShipmentLine
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return ShipmentLine
     */
    public function setQuantity(int $quantity): ShipmentLine
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getStackable(): int
    {
        return $this->stackable;
    }

    /**
     * @param int $stackable
     *
     * @return ShipmentLine
     */
    public function setStackable(int $stackable): ShipmentLine
    {
        $this->stackable = $stackable;

        return $this;
    }

    /**
     * @return float
     */
    public function getStackheight(): float
    {
        return $this->stackheight;
    }

    /**
     * @param float $stackheight
     *
     * @return ShipmentLine
     */
    public function setStackheight(float $stackheight): ShipmentLine
    {
        $this->stackheight = $stackheight;

        return $this;
    }

    /**
     * @return Measurement
     */
    public function getMeasurement(): Measurement
    {
        return $this->measurements;
    }

    /**
     * @param Measurement $measurement
     *
     * @return ShipmentLine
     */
    public function setMeasurement(Measurement $measurements): ShipmentLine
    {
        $this->measurements = $measurements;

        return $this;
    }

    /**
     * @return int
     */
    public function getDangerousGoods(): int
    {
        return $this->dangerousGoods;
    }

    /**
     * @param int $dangerousGoods
     *
     * @return ShipmentLine
     */
    public function setDangerousGoods(int $dangerousGoods): ShipmentLine
    {
        $this->dangerousGoods = $dangerousGoods;

        return $this;
    }

    /**
     * @return int
     */
    public function getDangerousGoodsGds(): int
    {
        return $this->dangerousGoodsGds;
    }

    /**
     * @param int $dangerousGoodsGds
     *
     * @return ShipmentLine
     */
    public function setDangerousGoodsGds(int $dangerousGoodsGds): ShipmentLine
    {
        $this->dangerousGoodsGds = $dangerousGoodsGds;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipmentLineId(): string
    {
        return $this->shipmentLineId;
    }

    /**
     * @param string $shipmentLineId
     */
    public function setShipmentLineId(string $shipmentLineId)
    {
        $this->shipmentLineId = $shipmentLineId;
    }

    /**
     * @return DeliveryNoteInfo
     */
    public function getDeliveryNoteInfo(): DeliveryNoteInfo
    {
        return $this->deliveryNoteInfo;
    }

    /**
     * @param DeliveryNoteInfo $deliveryNoteInfo
     *
     * @return ShipmentLine
     */
    public function setDeliveryNoteInfo(DeliveryNoteInfo $deliveryNoteInfo): ShipmentLine
    {
        $this->deliveryNoteInfo = $deliveryNoteInfo;

        return $this;
    }
}
