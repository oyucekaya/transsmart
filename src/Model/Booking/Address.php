<?php
namespace Transsmart\Model\Booking;

class Address
{
    private $type;
    private $name;
    private $street1;
    private $city;
    private $houseNo;
    private $zipCode;
    private $state;
    private $countryCode;
    private $contact;
    private $telNo;
    private $faxNo;
    private $email;
    private $accountNo;
    private $customerNo;
    private $VATNumber;
    private $residential = '';

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return Address
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     *
     * @return Address
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHouseNo()
    {
        return $this->houseNo;
    }

    /**
     * @param mixed $houseNo
     *
     * @return Address
     */
    public function setHouseNo($houseNo)
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     *
     * @return Address
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     *
     * @return Address
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResidential()
    {
        return $this->residential;
    }

    /**
     * @param mixed $residential
     *
     * @return Address
     */
    public function setResidential($residential)
    {
        $this->residential = $residential;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * @param mixed $accountNo
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
    }

    /**
     * @return mixed
     */
    public function getVATNumber()
    {
        return $this->VATNumber;
    }

    /**
     * @param mixed $VATNumber
     */
    public function setVATNumber($VATNumber)
    {
        $this->VATNumber = $VATNumber;
    }

    /**
     * @return mixed
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * @param mixed $customerNo
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFaxNo()
    {
        return $this->faxNo;
    }

    /**
     * @param mixed $faxNo
     */
    public function setFaxNo($faxNo)
    {
        $this->faxNo = $faxNo;
    }

    /**
     * @return mixed
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * @param mixed $telNo
     */
    public function setTelNo($telNo)
    {
        $this->telNo = $telNo;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


}