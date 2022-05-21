<?php

class BasketProductTransformer
{
    public function transform(BasketProduct $basketProduct) : array
    {
        $product = $basketProduct->product();

        return [
            'title' => $product->title(),
            'discount' => $basketProduct->discount(),
            'netPrice' => $basketProduct->netPrice(),
            'price' => $product->price(),
            'quantity' => $basketProduct->quantity()
        ];
    }
}