<?php

require_once __DIR__ . '/User.php';
class PremiumUser extends User
{
    protected $discount;

    public function __construct(String $name, String $lastname, Int $age, Int $discount, String $status, String $password, String $email)
    {
        parent::__construct($name, $lastname,  $age,  $status, $password, $email);
        $this->discount = $discount;
    }

    public function get_discount()
    {
        return $this->discount;
    }
}


$users = [];

if (isset($_GET["email"])) {
    $email = $_GET["email"];
    $password = $_GET["password"];
    $name = $_GET["name"];
    $lastname = $_GET["lastname"];
    $age = $_GET["age"];


    $newUser = new PremiumUser($name, $lastname, $age, 20, "premium", $password, $email);
    array_push($users, $newUser);
}



var_dump($users);
