<?php

namespace Source\Qualifield;

class User
{
    private $firstName;
    private $lastName;
    private $email;

    private $error;

    public function setUser($firstName, $lastName, $email)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);

        if (!$this->setEmail($email)) {
            $this->error = "O email {$this->getEmail()} não é válido!" ;

            return false;
        }

        return true;
    }

    public function getError()
    {
        return $this->error;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }


    private function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getEmail()
    {
        return $this->email;
    }

    private function setEmail($email)
    {
        $this->email = $email;
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    private function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }
}
