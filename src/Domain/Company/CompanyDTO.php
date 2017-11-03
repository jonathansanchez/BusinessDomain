<?php

namespace Drupal\business\Domain\Company;

use Drupal\business\Domain\Address\AddressDTO;

class CompanyDTO
{
    public $name;

    public $rut;

    public $activity;

    public $address;

    public $rutImage;

    public $rutImageBack = '';

    public $legalRepresentative;

    public $legalRepresentativeEmail;

    public $addressNumber;

    public function __construct(Company $company, AddressDTO $address) {
        $this->rut                      = $company->rut();
        $this->rutImage                 = $company->rutImage();
        $this->name                     = $company->name();
        $this->activity                 = $company->activity();
        $this->legalRepresentative      = $company->legalRepresentative();
        $this->legalRepresentativeEmail = $company->legalRepresentativeEmail();
        $this->address                  = $address;
        $this->addressNumber            = $company->addressNumber();

        $this->setAddressApartment($company);
        $this->setAddressFloor($company);
        $this->setAddressOffice($company);
    }

    /**
     * @param Company $company
     */
    private function setAddressApartment(Company $company)
    {
        if (null != $company->addressApartment()) {
            $this->addressApartment = $company->addressApartment();
        }
    }

    /**
     * @param Company $company
     */
    private function setAddressFloor(Company $company): void
    {
        if (null != $company->addressFloor()) {
            $this->addressFloor = $company->addressFloor();
        }
    }

    /**
     * @param Company $company
     */
    private function setAddressOffice(Company $company): void
    {
        if (null != $company->addressOffice()) {
            $this->addressOffice = $company->addressOffice();
        }
    }
}
