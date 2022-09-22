<?php

namespace App\Tests;

use App\Inventory;
use App\ProductRepository;
use App\ProductsRepository;
use PHPUnit\Framework\TestCase;

class InventoryTest extends TestCase
{
    public function testProductsCanBeSet(): void
    {
        // create a mock class for Products
        $mockProductRepository = $this->createMock(ProductRepository::class);
        
        $inventory = new Inventory($mockProductRepository);

        // set return value for fetchProducts method
        $mockProducts = [
            'TestProduct 1',
            'TestProduct 2',
            'TestProduct 3',
            'TestProduct 4',
            'TestProduct 5'
        ];

        $mockProductRepository->method('fetchProducts')->willReturn($mockProducts);

        $inventory->loadProducts();

        $this->assertCount(5, $inventory->getProducts());
    }
}
