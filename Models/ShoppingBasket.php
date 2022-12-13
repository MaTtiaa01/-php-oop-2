<?php

class ShoppingBasket
{
    public $basketProducts = [];
    public function __construct(protected User $user)
    {
        $this->user = $user;
    }

    public function add(Product $product, $quantity)
    {
        array_unshift(
            $this->basketProducts,
            [
                'product' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity
            ]
        );
    }
}
