<?php

namespace Drupal\business\Domain\Administrator;

/**
 * Interface AdministratorRepository
 * @package Drupal\business\Domain\Administrator
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