<?php

class Item
{
    public $name;
    public $category;
    public $title;
    public $img;
    public $price;
    public $type;


    public function __construct(String $name, String $category, String $title, String $img, String $price, String $type)
    {
        $this->name = $name;
        $this->category = $category;
        $this->title = $title;
        $this->img = $img;
        $this->price = $price;
        $this->type = $type;
    }

    // public function get_item_details()
    // {
    //     return "$this->name | $this->category | $this->title | $this->img | $this->price | $this->type";
    // }
}

$stick = new Item("stick", "dog", "stick", "url", "35", "dog toys");
//var_dump($stick);
$dog_house = new Item("dog huose", "dog", "dog huose", "url", "40", "dog huose");
$cat_food = new Item("cat food", "cat", "cat food", "url", "5", "cat food");


$products = [
    $stick,
    $dog_house,
    $cat_food
];
