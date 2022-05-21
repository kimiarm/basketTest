<?php

class Basket {
    private $products = [];

    public function addToBasket(BasketProduct $basketProduct)
    {

    }

    public function removeFromBasket()
    {

    }
    public function totalPrice() : int
    {
        $totalPrice = 0;
        foreach($this->products as $product) {
            $totalPrice =+ $product->netPrice();
        }

        return $totalPrice;
    }

    public function items() : array
    {
        // todo
        return $this->products;
    }
}
