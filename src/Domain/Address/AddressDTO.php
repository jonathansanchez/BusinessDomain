<?php

namespace Drupal\business\Domain\Address;

class AddressDTO
{
    public $address;

    public $region;

    public $city;

    public function __construct(Address $address)
    {
        $this->address = $address->address();
        $this->region  = $address->region();
        $this->city    = $address->city();
    }
}