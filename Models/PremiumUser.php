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
