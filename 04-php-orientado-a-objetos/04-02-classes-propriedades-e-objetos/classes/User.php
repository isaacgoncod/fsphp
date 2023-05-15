<?php

class User
{
    public $firstName;
    public $lastName;
    public $email;

    public function getFirstName()
    {
        return $this->firstName;
    }


    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }

    public function getLastName()
    {
        return $this->lastName;
    }


    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }
}
