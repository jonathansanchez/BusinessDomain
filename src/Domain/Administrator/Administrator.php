<?php

namespace Drupal\business\Domain\Administrator;

class Administrator
{
    private $rut;

    private $rutImage;

    private $rutImageBack;

    private $email;

    private $firstName;

    private $lastName;

    private $password;

    private $phone;

    public function __construct($rut, $rutImage, $rutImageBack, $email, $firstName, $lastName, $password = null, $phone)
    {
        $this->setRut($rut);
        $this->setRutImage($rutImage);
        $this->setRutImageBack($rutImageBack);
        $this->setEmail($email);
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->password  = $password;
        $this->phone     = $phone;
    }

    private function setRut($rut)
    {
        $this->rut = str_replace('.', '', strtoupper($rut));
    }

    /**
     * @return mixed
     */
    public function rut()
    {
        return $this->rut;
    }

    private function setRutImage($rutImage)
    {
        $rutImage       = explode(',', $rutImage);
        $this->rutImage = end($rutImage);
    }

    /**
     * @return mixed
     */
    public function rutImage()
    {
        return $this->rutImage;
    }

    private function setRutImageBack($rutImageBack)
    {
        $rutImageBack       = explode(',', $rutImageBack);
        $this->rutImageBack = end($rutImageBack);
    }

    /**
     * @return mixed
     */
    public function rutImageBack()
    {
        return $this->rutImageBack;
    }

    private function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException();
        }

        $this->email = strtolower($email);
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