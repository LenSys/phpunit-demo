<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class MockCartTest extends TestCase
{

    public function testMockCartIsCreated(): void
    {
        // create a mock class for Cart
        $mockCart = $this->createMock(Cart::class);

        // set return value for specific method
        $mockValue = 12.2;
        $mockCart->method('getTax')->willReturn($mockValue);

        // call mock class method
        $taxValue = $mockCart->getTax();

        $this->assertSame($mockValue, $taxValue);
    }
}