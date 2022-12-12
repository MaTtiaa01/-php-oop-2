<?php

class User
{
    protected $name;
    protected $lastname;
    protected $age;
    public $status;

    public function __construct(String $name, String $lastname, Int $age, String $status)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
    }
}

$user_1 = new User("Mattia", "Barbieri", 21, "standard");
$user_2 = new PremiumUser("Mario", "Rossi", 35, 20, "premium");


$users = [
    $user_1,
    $user_2
];
