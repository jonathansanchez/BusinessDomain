<?php

namespace Application\Services\Company\Request;


class AuthRequest
{
    /**
     * @var string
     */
    private $companyRut;

    /**
     * @var string
     */
    private $administratorRut;

    /**
     * @var string
     */
    private $password;

    /**
     * Login constructor.
     *
     * @param string $companyRut
     * @param string $administratorRut
     * @param string $password
     */
    public function __construct(string $companyRut, string $administratorRut, string $password)
    {
        $this->companyRut       = $companyRut;
        $this->administratorRut = $administratorRut;
        $this->password         = $password;
    }

    /**
     * @return string
     */
    public function companyRut()
    {
        return $this->companyRut;
    }

    /**
     * @return string
     */
    public function administratorRut()
    {
        return $this->administratorRut;
    }

    /**
     * @return string
     */
    public function password()
    {
        return $this->password;
    }
}