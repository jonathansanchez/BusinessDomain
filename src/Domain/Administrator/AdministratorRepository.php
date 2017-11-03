<?php

namespace Drupal\domain\Domain\Administrator;

/**
 * Interface AdministratorRepository
 * @package Drupal\domain\Domain\Administrator
 *
 * This file must be implemented by infrastructure
 * to persist a Administrator.
 */
interface AdministratorRepository
{
    /**
     * @param string $administratorRut
     *
     * @return mixed
     */
    public function administratorOfRut($administratorRut);
}