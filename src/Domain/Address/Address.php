<?php

namespace Drupal\domain\Domain\Address;

class Address
{
    private $address;

    private $region;

    private $city;

    private $addressNumber;

    private $addressApartment;

    private $addressFloor;

    private $addressOffice;

    public function __construct($address, $region, $city, $addressNumber, $addressApartment = null, $addressFloor = null, $addressOffice = null)
    {
        $this->address          = $address;
        $this->region           = $region;
        $this->city             = $city;
        $this->addressNumber    = $addressNumber;
        $this->addressApartment = $addressApartment;
        $this->addressFloor     = $addressFloor;
        $this->addressOffice    = $addressOffice;
    }

    /**
     * @return mixed
     */
    public function address()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function region()
    {
        return $this->region;
    }

    /**
     * @return mixed
     */
    public function city()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function addressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * @return mixed
     */
    public function addressApartment()
    {
        return $this->addressApartment;
    }

    /**
     * @return mixed
     */
    public function addressFloor()
    {
        return $this->addressFloor;
    }

    /**
     * @return mixed
     */
    public function addressOffice()
    {
        return $this->addressOffice;
    }
}