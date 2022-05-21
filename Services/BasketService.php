<?php

class BasketService {
    private $productRepository;
    private $basketStorage;

    public function __construct()
    {
        // inject product repository and basket repository
    }

    public function addToBasket(int $productId, int $quantity, int $batchDiscount) : void
    {
        /*
        * find product from database if there is no product throw exception
        * $product = $productRepository->findById($productId)
        */

        /*
        * find $basket from basket storage
        */

        $basket->addToBasket($this->makeBasketProduct($product, $quantity, $batchDiscount));
    }

    private function makeBasketProduct(Product $product, int $quantity, int $batchDiscount): BasketProduct
    {
        return BasketProduct::fromProduct($product, $quantity, $batchDiscount);
    }
}