<?php
namespace Transsmart\Model\Booking;

class Measurement
{
    /** @var  float */
    private $length;
    /** @var  float */
    private $width;
    /** @var  float */
    private $height;
    /** @var  float */
    private $weight;
    /** @var  string */
    private $sizeUom;
    /** @var  string */
    private $weightUom;

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     *
     * @return Measurement
     */
    public function setLength(float $length): Measurement
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     *
     * @return Measurement
     */
    public function setWidth(float $width): Measurement
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     *
     * @return Measurement
     */
    public function setHeight(float $height): Measurement
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return Measurement
     */
    public function setWeight(float $weight): Measurement
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return string
     */
    public function getSizeUom(): string
    {
        return $this->sizeUom;
    }

    /**
     * @param string $sizeUom
     *
     * @return Measurement
     */
    public function setSizeUom(string $sizeUom): Measurement
    {
        $this->sizeUom = $sizeUom;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUom(): string
    {
        return $this->weightUom;
    }

    /**
     * @param string $weightUom
     *
     * @return Measurement
     */
    public function setWeightUom(string $weightUom): Measurement
    {
        $this->weightUom = $weightUom;

        return $this;
    }

}