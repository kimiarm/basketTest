<?php

class Product {
    private $id;
    private $price;
    private $title;
    private $discount;

    public function __construct(string $title, int $price, int $discount = 0) {
            if($title == "") {
                return;
                // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
            }
            if($price <  0) {
                return;
                // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
            }
            if($discount <  0 || $discount > 100) {
                return;
                // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
            }

            $this->title = $title;
            $this->price = $price;
            $this->discount = $discount;

            //todo event dispatch to inform others that a product is created
    }

    public function id() : int
    {
        return $this->id;
    }
    public function discount() : int
    {
        return $this->discount;
    }

    public function price() : int
    {
        return $this->price;
    }

    public function title() : int
    {
        return $this->title;
    }

}