<?php

namespace Drupal\domain\Domain\Company;

/**
 * Interface CompanyAuth
 * @package Drupal\domain\Domain\Company
 *
 * This file must be implemented by infrastructure
 * to authenticate a Company.
 */
interface CompanyAuth
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
     * @param none
     *
     * @return void
     */
    public function logout();
}