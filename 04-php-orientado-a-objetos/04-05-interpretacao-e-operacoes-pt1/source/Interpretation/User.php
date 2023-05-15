<?php

namespace Source\Interpretation;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    public function __construct($firstName, $lastName, $email = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

        public function getFirstName()
        {
            return $this->firstName;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function getLastName()
        {
            return $this->lastName;
        }
}
