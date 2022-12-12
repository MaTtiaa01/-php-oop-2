<?php

class Item
{
    private $name;
    private $category;

    public function __construct(String $name, String $category)
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function get_item_details()
    {
        return "$this->name | $this->category";
    }
}
