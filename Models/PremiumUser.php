<?php

class PremiumUser extends User
{
    protected $discount;

    public function __construct(String $name, String $lastname, Int $age, Int $discount, String $status)
    {
        parent::__construct($name, $lastname,  $age,  $status);
        $this->discount = $discount;
    }

    public function get_discount()
    {
        return $this->discount;
    }
}
