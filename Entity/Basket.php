<?php

class Basket {
    private $basketProducts = [];
    private $productRepository;
    private $basketProductTransformer;
    private $errors = [];

    public function __construct()
    {
        // inject Productrepository and BasketProductTransformer
    }


    public function addToBasket(int $productId): void
    {
        /*
        * find product from database if there is no product add to errors array
        * $product = $productRepository->findById($productId)
        */

        if($this->inBasket($productId)){
           $this->errors[] = "Duplicate productId : ".$productId;

           return;
        }

        $basketProducts[] = $this->makeBasketProduct($product, $quantity, $batchDiscount);
    }

    public function removeFromBasket(int $productId): void
    {
        if(!$this->inBasket($productId)){
            $this->errors[] = "Can not remove product  : ".$productId;
 
            return;
        }

        $array = \array_filter($this->basketProducts, static function ($element) {

            return $element->product()->id() !== $productId;
        });

        $this->basketProducts = $array;
    }

    public function totalPrice() : int
    {
        $totalPrice = 0;
        foreach($this->basketProducts as $basketProduct) {
            $totalPrice =+ $product->netPrice();
        }

        return $totalPrice;
    }

    public function items() : array
    {
        $transformedBasketProducts = [];
        foreach($this->basketProducts as $basketProduct)
        {
            $transformedBasketProducts[] = $basketProductTransformer->transform($basketProduct);
        }

        return $transformedBasketProducts;
    }

    private function inBasket(int $productId): bool
    {
        foreach($this->basketProducts as $basketProduct) {
            if($basketProduct->product()->id() == $productId){
                return true;
            }
        }

        return false;
    }

    private function makeBasketProduct(Product $product, int $quantity, int $batchDiscount): BasketProduct
    {
        return BasketProduct::fromProduct($product, $quantity, $batchDiscount);
    }
}
