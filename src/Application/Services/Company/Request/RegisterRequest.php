<?php

namespace Drupal\domain\Application\Services\Company\Request;

/**
 * Class RegisterRequest DTO
 * @package Drupal\domain\Application\Services
 */
class RegisterRequest
{
    //Fields Company
    private $rutCompany;

    private $rutImageCompany;

    private $name;

    private $activity;

    private $legalRepresentative;

    private $legalRepresentativeEmail;

    private $addressNumber;

    private $addressApartment;

    private $addressFloor;

    private $addressOffice;

    //Fields Address
    private $address;

    private $region;

    private $city;

    //Fields Administrator
    private $rutAdministrator;

    private $rutImageAdministrator;

    private $rutImageBackAdministrator;

    private $email;

    private $firstName;

    private $lastName;

    private $password;

    private $phone;

    public function __construct(
        $rutCompany,
        $rutImageCompany,
        $name,
        $activity,
        $legalRepresentative,
        $legalRepresentativeEmail,
        $address,
        $region,
        $city,
        $addressNumber,
        $addressApartment = null,
        $addressFloor = null,
        $addressOffice = null,
        $rutAdministrator,
        $rutImageAdministrator,
        $rutImageBackAdministrator,
        $email,
        $firstName,
        $lastName,
        $password = null,
        $phone
    ) {
        $this->rutCompany                = $rutCompany;
        $this->rutImageCompany           = $rutImageCompany;
        $this->name                      = $name;
        $this->activity                  = $activity;
        $this->legalRepresentative       = $legalRepresentative;
        $this->legalRepresentativeEmail  = $legalRepresentativeEmail;
        $this->address                   = $address;
        $this->region                    = $region;
        $this->city                      = $city;
        $this->addressNumber             = $addressNumber;
        $this->addressApartment          = $addressApartment;
        $this->addressFloor              = $addressFloor;
        $this->addressOffice             = $addressOffice;
        $this->rutAdministrator          = $rutAdministrator;
        $this->rutImageAdministrator     = $rutImageAdministrator;
        $this->rutImageBackAdministrator = $rutImageBackAdministrator;
        $this->email                     = $email;
        $this->firstName                 = $firstName;
        $this->lastName                  = $lastName;
        $this->password                  = $password;
        $this->phone                     = $phone;
    }

    /**
     * @return mixed
     */
    public function rutCompany()
    {
        return $this->rutCompany;
    }

    /**
     * @return mixed
     */
    public function rutImageCompany()
    {
        return $this->rutImageCompany;
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
     * @return null
     */
    public function addressApartment()
    {
        return $this->addressApartment;
    }

    /**
     * @return null
     */
    public function addressFloor()
    {
        return $this->addressFloor;
    }

    /**
     * @return null
     */
    public function addressOffice()
    {
        return $this->addressOffice;
    }

    /**
     * @return mixed
     */
    public function rutAdministrator()
    {
        return $this->rutAdministrator;
    }

    /**
     * @return mixed
     */
    public function rutImageAdministrator()
    {
        return $this->rutImageAdministrator;
    }

    /**
     * @return mixed
     */
    public function rutImageBackAdministrator()
    {
        return $this->rutImageBackAdministrator;
    }

    /**
     * @return mixed
     */
    public function email()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function firstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function lastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function password()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function phone()
    {
        return $this->phone;
    }
}