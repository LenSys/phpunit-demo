<?php

class Cart
{
    private float $price;
    private float $tax = 1.19;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }


    public function getNetPrice(): float
    {
        return $this->price * $this->tax;
    }

    public function getTax(): float
    {
        return $this->tax;
    }

    
    public function setTax(float $tax): void
    {
        $this->tax = $tax;
    }
}