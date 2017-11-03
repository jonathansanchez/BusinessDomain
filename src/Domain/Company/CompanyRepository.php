<?php

namespace Drupal\business\Domain\Company;

use Drupal\business\Domain\Address\Address;
use Drupal\business\Domain\Administrator\Administrator;

/**
 * Interface CompanyRepository
 * @package Drupal\business\Domain\Company
 *
 * This file must be implemented by infrastructure
 * to persist a Company.
 */
interface CompanyRepository
{
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