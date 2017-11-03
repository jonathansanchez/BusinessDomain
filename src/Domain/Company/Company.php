<?php

namespace Drupal\business\Domain\Company;

use Drupal\business\Domain\Address\Address;

class Company
{
    private $id;

    private $rut;

    private $rutImage;

    private $rutImageBack;

    private $name;

    private $activity;

    private $status;

    private $legalRepresentative;

    private $legalRepresentativeEmail;

    private $address;

    private $addressNumber;

    private $addressApartment;

    private $addressFloor;

    private $addressOffice;

    public function __construct(
        $rut,
        $rutImage,
        $name,
        $activity,
        $legalRepresentative,
        $legalRepresentativeEmail,
        Address $address
    ) {
        $this->setRut($rut);
        $this->setRutImage($rutImage);
        $this->status                   = 'PENDING';
        $this->rutImageBack             = '';
        $this->name                     = $name;
        $this->activity                 = $activity;
        $this->legalRepresentative      = $legalRepresentative;
        $this->legalRepresentativeEmail = $legalRepresentativeEmail;
        $this->address                  = $address;
        $this->addressNumber            = $address->addressNumber();
        $this->addressApartment         = $address->addressApartment();
        $this->addressFloor             = $address->addressFloor();
        $this->addressOffice            = $address->addressOffice();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function activate()
    {
        $this->status = 'ACTIVE';
    }

    public function mercy()
    {
        $this->status = 'MERCY';
    }

    public function pending()
    {
        $this->status = 'PENDING';
    }

    private function setRut($rut)
    {
        $this->rut = str_replace('.', '', strtoupper($rut));
    }

    private function setRutImage($rutImage)
    {
        $rutImage       = explode(',', $rutImage);
        $this->rutImage = end($rutImage);
    }

    /**
     * @return mixed
     */
    public function rut()
    {
        return $this->rut;
    }

    /**
     * @return mixed
     */
    public function rutImage()
    {
        return $this->rutImage;
    }

    /**
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function activity()
    {
        return $this->activity;
    }

    /**
     * @return mixed
     */
    public function status()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function legalRepresentative()
    {
        return $this->legalRepresentative;
    }

    /**
     * @return mixed
     */
    public function legalRepresentativeEmail()
    {
        return $this->legalRepresentativeEmail;
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
    public function addressNumber()
    {
        return $this->address->addressNumber();
    }

    /**
     * @return null
     */
    public function addressApartment()
    {
        return $this->address->addressApartment();
    }

    /**
     * @return null
     */
    public function addressFloor()
    {
        return $this->address->addressFloor();
    }

    /**
     * @return null
     */
    public function addressOffice()
    {
        return $this->address->addressOffice();
    }
}