<?php
class BasketProduct {
    private $quantity;
    private $isBatch;
    private $productId ;

    public function __construct(int $quantity, int $productId, $isBatch = false) {
        $this->quantity = $quantity;
        $this->productId = $productId;
        $this->isBatch = $isBatch;
    }
}