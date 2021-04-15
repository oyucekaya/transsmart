<?php

namespace Transsmart\Model\Booking;

class Booking
{
    /** @var string */
    private $costcenter;
    /** @var  string */
    private $carrier;
    /** @var  string */
    private $executingCarrier;
    /** @var  string */
    private $origin;
    /** @var  string */
    private $language;
    /** @var  string */
    private $action;
    /** @var  string */
    private $version;

    /**
     * @return string
     */
    public function getCostcenter(): string
    {
        return $this->costcenter;
    }

    /**
     * @param string $costcenter
     */
    public function setCostcenter(string $costcenter)
    {
        $this->costcenter = $costcenter;
    }

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     *
     * @return Booking
     */
    public function setCarrier(string $carrier): Booking
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getExecutingCarrier(): string
    {
        return $this->executingCarrier;
    }

    /**
     * @param string $executingCarrier
     *
     * @return Booking
     */
    public function setExecutingCarrier(string $executingCarrier): Booking
    {
        $this->executingCarrier = $executingCarrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return Booking
     */
    public function setOrigin(string $origin): Booking
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return Booking
     */
    public function setLanguage(string $language): Booking
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     *
     * @return Booking
     */
    public function setAction(string $action): Booking
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Booking
     */
    public function setVersion(string $version): Booking
    {
        $this->version = $version;

        return $this;
    }
}
