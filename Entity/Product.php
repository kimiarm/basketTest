<?php

class Product {
    private $id;
    private $price;
    private $title;
    private $discount;
    public function __construct(string $title, int $price, int $discount) {
            // todo validation
            //todo event dispatch
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