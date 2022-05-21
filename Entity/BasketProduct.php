<?php
class BasketProduct {
    private $quantity;
    private $batchDiscount;
    private $product;

    private function __construct(){}

    public static function fromProduct(Product $product, int $quantity, $batchDiscount = 0)
    {
        if($batchDiscount <  0 || $batchDiscount > 100) {
            return;
            // throw custom exception throw couldNotCreateBasketProduct.withAttributes(['quantity' => $title, 'productId' => $product->id(), 'batchDiscount' => $batchDiscount]) 
        }
        if($quantity <  0) {
            return;
            // throw custom exception throw couldNotCreateBasketProduct.withAttributes(['quantity' => $title, 'productId' => $product->id(), 'batchDiscount' => $batchDiscount]) 
        }

        $basketProduct = new BasketProduct(); 
        $basketProduct->quantity = $quantity;
        $basketProduct->product = $product;
        $basketProduct->batchDiscount = $batchDiscount;

        return $basketProduct;
    }

    public function netPrice() : int
    {
        return $this->product()->price() * (1 - $this->discount());
    }

    public function product()
    {
        return $this->product;
    }

    public function discount() : int
    { 
        if ($this->batchDiscount) {
            return $this->batchDiscount;
        }

        return $this->product()->discount();
    }

}