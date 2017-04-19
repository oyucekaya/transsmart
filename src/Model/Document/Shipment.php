<?php
namespace Transsmart\Model\Document;

class Shipment
{
    private $reference;
    private $colloId;
    private $awb;
    private $printerType = 'LABEL';
    private $printerName = 'Default';

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
    public function getColloId()
    {
        return $this->colloId;
    }

    /**
     * @param mixed $colloId
     *
     * @return Shipment
     */
    public function setColloId($colloId)
    {
        $this->colloId = $colloId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAwb()
    {
        return $this->awb;
    }

    /**
     * @param mixed $awb
     *
     * @return Shipment
     */
    public function setAwb($awb)
    {
        $this->awb = $awb;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrinterType(): string
    {
        return $this->printerType;
    }

    /**
     * @param string $printerType
     *
     * @return Shipment
     */
    public function setPrinterType(string $printerType): Shipment
    {
        $this->printerType = $printerType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrinterName(): string
    {
        return $this->printerName;
    }

    /**
     * @param string $printerName
     *
     * @return Shipment
     */
    public function setPrinterName(string $printerName): Shipment
    {
        $this->printerName = $printerName;

        return $this;
    }



}