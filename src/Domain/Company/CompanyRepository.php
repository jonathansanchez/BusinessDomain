<?php

namespace Drupal\domain\Domain\Company;

use Drupal\domain\Domain\Address\Address;
use Drupal\domain\Domain\Administrator\Administrator;

/**
 * Interface CompanyRepository
 * @package Drupal\domain\Domain\Company
 *
 * This file must be implemented by infrastructure
 * to persist a Company.
 */
interface CompanyRepository
{
    /**
     * @param string $companyRut
     * @param string $administratorRut
     * @param string $password
     *
     * @return mixed
     */
    public function authenticate(string $companyRut, string $administratorRut, string $password);

    /**
     * @param Address       $address
     * @param Company       $company
     * @param Administrator $administrator
     *
     * @return mixed
     */
    public function register(Address $address, Company $company, Administrator $administrator);

    /**
     * @param Address       $address
     * @param Company       $company
     * @param Administrator $administrator
     *
     * @return mixed
     */
    public function edit(Address $address, Company $company, Administrator $administrator);

    /**
     * @param string $companyRut
     *
     * @return mixed
     */
    public function companyOfRut($companyRut);
}