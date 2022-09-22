<?php

namespace App;

class ProductRepository
{
    public function fetchProducts(): array
    {
        // TODO: use database to fetch products
        return [
            'Product 1',
            'Product 2',
            'Product 3',
            'Product 4'
        ];
    }
}
