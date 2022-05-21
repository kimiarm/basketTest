<?php
class BasketProduct {
    private $quantity;
    private $batchDiscount;
    private $productId ;

    public function __construct(int $quantity, int $productId, $batchDiscount = 0) {
        $this->quantity = $quantity;
        $this->productId = $productId;
        $this->batchDiscount = $batchDiscount;
        // todo validation
    }


    public function netPrice() : int
    {
        return $this->product()->price() * (1 - $this->discount());
    }
    public function product()
    {

    }
    private function discount() : int
    { 
        if ($this->batchDiscount) {
            return $this->batchDiscount;
        }

        return $this->product()->discount();
    }

}