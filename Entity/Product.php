<?php

class Product {
    private $id;
    private $price;
    private $title;
    private $discount;
// we should write validation classes  for each attribute
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

    public function withTitle(string $title) : Product
    {
        if($title == "") {

            // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
        }

        $newProduct = clone $this;
        $newProduct->title = $title;

        return $newProduct;
    }

    public function withDiscount(int $discount) : Product
    {
        if($discount <  0 || $discount > 100) {

            // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
        }

        $newProduct = clone $this;
        $newProduct->discount = $discount;

        return $newProduct;
    }

    public function withPrice(int $price) : Product
    {
        if($price <  0) {

            // throw custom exception throw couldNotCreateProduct.withAttributes(['title' => $title, 'price' => $price, 'discount' => $discount]) 
        }

        $newProduct = clone $this;
        $newProduct->price = $price;

        return $newProduct;
    }

}