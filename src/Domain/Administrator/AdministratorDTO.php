<?php

namespace Drupal\business\Domain\Administrator;

class AdministratorDTO
{
    public $rut;

    public $rutImage;

    public $rutImageBack;

    public $email;

    public $firstName;

    public $lastName;

    public $phone;

    public function __construct(Administrator $administrator)
    {
        $this->rut          = $administrator->rut();
        $this->rutImage     = $administrator->rutImage();
        $this->rutImageBack = $administrator->rutImageBack();
        $this->email        = $administrator->email();
        $this->firstName    = $administrator->firstName();
        $this->lastName     = $administrator->lastName();
        $this->phone        = $administrator->phone();

        if (null != $administrator->password() ) {
            $this->password = $administrator->password();
        }
    }
}