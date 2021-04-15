<?php

namespace Transsmart\Model\Booking;

class DeliveryNoteLine
{
    /** @var  float */
    private $price;
    /** @var  string */
    private $deliveryNoteId;
    /** @var  string */
    private $proformaInvoiceNumber;
    /** @var  string */
    private $proformaInvoiceLineNumber;
    /** @var  int */
    private $lineNo = 0;
    /** @var  int */
    private $quantity = 0;
    /** @var  string */
    private $quantityOrder;
    /** @var  string */
    private $quantityBackorder;
    /** @var  int */
    private $quantityM2;
    /** @var  string */
    private $customerOrder;
    /** @var  int */
    private $articleEanCode;
    /** @var  string */
    private $articleName;
    /** @var  string */
    private $quality;
    /** @var  string */
    private $composition;
    /** @var  float */
    private $grossWeight;
    /** @var  float */
    private $nettWeight;
    /** @var  float */
    private $weightUom;
    /** @var  string */
    private $HSCode;
    /** @var  string */
    private $HSCodeDescription;
    /** @var  string */
    private $reasonOfExport;

    /**
     * @return string
     */
    public function getDeliveryNoteId(): string
    {
        return $this->deliveryNoteId;
    }

    /**
     * @param int $deliveryNoteId
     *
     * @return DeliveryNoteLine
     */
    public function setDeliveryNoteId(int $deliveryNoteId): DeliveryNoteLine
    {
        $this->deliveryNoteId = $deliveryNoteId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProformaInvoiceNumber(): string
    {
        return $this->proformaInvoiceNumber;
    }

    /**
     * @param string $proformaInvoiceNumber
     *
     * @return DeliveryNoteLine
     */
    public function setProformaInvoiceNumber(string $proformaInvoiceNumber): DeliveryNoteLine
    {
        $this->proformaInvoiceNumber = $proformaInvoiceNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getProformaInvoiceLineNumber(): string
    {
        return $this->proformaInvoiceLineNumber;
    }

    /**
     * @param string $proformaInvoiceLineNumber
     *
     * @return DeliveryNoteLine
     */
    public function setProformaInvoiceLineNumber(string $proformaInvoiceLineNumber): DeliveryNoteLine
    {
        $this->proformaInvoiceLineNumber = $proformaInvoiceLineNumber;

        return $this;
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
     * @return DeliveryNoteLine
     */
    public function setLineNo(int $lineNo): DeliveryNoteLine
    {
        $this->lineNo = $lineNo;

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
     * @return DeliveryNoteLine
     */
    public function setQuantity(int $quantity): DeliveryNoteLine
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityOrder(): string
    {
        return $this->quantityOrder;
    }

    /**
     * @param string $quantityOrder
     *
     * @return DeliveryNoteLine
     */
    public function setQuantityOrder(string $quantityOrder): DeliveryNoteLine
    {
        $this->quantityOrder = $quantityOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityBackorder(): string
    {
        return $this->quantityBackorder;
    }

    /**
     * @param string $quantityBackorder
     *
     * @return DeliveryNoteLine
     */
    public function setQuantityBackorder(string $quantityBackorder): DeliveryNoteLine
    {
        $this->quantityBackorder = $quantityBackorder;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantityM2(): int
    {
        return $this->quantityM2;
    }

    /**
     * @param int $quantityM2
     *
     * @return DeliveryNoteLine
     */
    public function setQuantityM2(int $quantityM2): DeliveryNoteLine
    {
        $this->quantityM2 = $quantityM2;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerOrder(): string
    {
        return $this->customerOrder;
    }

    /**
     * @param string $customerOrder
     *
     * @return DeliveryNoteLine
     */
    public function setCustomerOrder(string $customerOrder): DeliveryNoteLine
    {
        $this->customerOrder = $customerOrder;

        return $this;
    }

    /**
     * @return int
     */
    public function getArticleEanCode(): int
    {
        return $this->articleEanCode;
    }

    /**
     * @param int $articleEanCode
     *
     * @return DeliveryNoteLine
     */
    public function setArticleEanCode(int $articleEanCode): DeliveryNoteLine
    {
        $this->articleEanCode = $articleEanCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getArticleName(): string
    {
        return $this->articleName;
    }

    /**
     * @param string $articleName
     *
     * @return DeliveryNoteLine
     */
    public function setArticleName(string $articleName): DeliveryNoteLine
    {
        $this->articleName = $articleName;

        return $this;
    }

    /**
     * @return string
     */
    public function getQuality(): string
    {
        return $this->quality;
    }

    /**
     * @param string $quality
     *
     * @return DeliveryNoteLine
     */
    public function setQuality(string $quality): DeliveryNoteLine
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * @return string
     */
    public function getComposition(): string
    {
        return $this->composition;
    }

    /**
     * @param string $composition
     *
     * @return DeliveryNoteLine
     */
    public function setComposition(string $composition): DeliveryNoteLine
    {
        $this->composition = $composition;

        return $this;
    }

    /**
     * @return float
     */
    public function getGrossWeight(): float
    {
        return $this->grossWeight;
    }

    /**
     * @param float $grossWeight
     *
     * @return DeliveryNoteLine
     */
    public function setGrossWeight(float $grossWeight): DeliveryNoteLine
    {
        $this->grossWeight = $grossWeight;

        return $this;
    }

    /**
     * @return float
     */
    public function getNettWeight(): float
    {
        return $this->nettWeight;
    }

    /**
     * @param float $nettWeight
     *
     * @return DeliveryNoteLine
     */
    public function setNettWeight(float $nettWeight): DeliveryNoteLine
    {
        $this->nettWeight = $nettWeight;

        return $this;
    }

    /**
     * @return float
     */
    public function getWeightUom(): float
    {
        return $this->weightUom;
    }

    /**
     * @param float $weightUom
     *
     * @return DeliveryNoteLine
     */
    public function setWeightUom(float $weightUom): DeliveryNoteLine
    {
        $this->weightUom = $weightUom;

        return $this;
    }

    /**
     * @return string
     */
    public function getHSCode(): string
    {
        return $this->HSCode;
    }

    /**
     * @param string $HSCode
     *
     * @return DeliveryNoteLine
     */
    public function setHSCode(string $HSCode): DeliveryNoteLine
    {
        $this->HSCode = $HSCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getHSCodeDescription(): string
    {
        return $this->HSCodeDescription;
    }

    /**
     * @param string $HSCodeDescription
     *
     * @return DeliveryNoteLine
     */
    public function setHSCodeDescription(string $HSCodeDescription): DeliveryNoteLine
    {
        $this->HSCodeDescription = $HSCodeDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonOfExport(): string
    {
        return $this->reasonOfExport;
    }

    /**
     * @param string $reasonOfExport
     *
     * @return DeliveryNoteLine
     */
    public function setReasonOfExport(string $reasonOfExport): DeliveryNoteLine
    {
        $this->reasonOfExport = $reasonOfExport;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
}
