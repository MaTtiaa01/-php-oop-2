<?php

class User
{
    protected $name;
    protected $lastname;
    protected $age;
    protected $password;
    protected $mail;
    public $status;

    public function __construct(String $name, String $lastname, Int $age)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }
}

$users = [];

var_dump($users);
