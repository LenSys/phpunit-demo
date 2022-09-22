<?php

namespace App;

class Inventory
{
    private array $products;

    public function __construct(private ProductRepository $productRepository)
    {
    }


    public function loadProducts(): void
    {
        $this->products = $this->productRepository->fetchProducts();
    }


    public function getProducts(): array
    {
        return $this->products;
    }
}
