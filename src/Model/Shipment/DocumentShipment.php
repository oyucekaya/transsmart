<?php
/**
 * Created by PhpStorm.
 * User: Osman
 * Date: 16-5-2017
 * Time: 13:35
 */

namespace Transsmart\Model\Shipment;

class DocumentShipment extends Shipment
{
    private $colloId;
    private $awb;
    private $printerType = 'LABEL';
    private $printerName = 'Default';

    /**
     * @return mixed
     */
    public function getColloId()
    {
        return $this->colloId;
    }

    /**
     * @param mixed $colloId
     */
    public function setColloId($colloId)
    {
        $this->colloId = $colloId;
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
     */
    public function setAwb($awb)
    {
        $this->awb = $awb;
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
     */
    public function setPrinterType(string $printerType)
    {
        $this->printerType = $printerType;
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
     */
    public function setPrinterName(string $printerName)
    {
        $this->printerName = $printerName;
    }
}
