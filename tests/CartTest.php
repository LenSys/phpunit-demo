<?php

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public function testNetPricePositive(): void
    {
        $cart = new Cart(10);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(11.9, round($netPrice, 2));
        $this->assertEquals(1.19, $cart->getTax());
    }

    public function testNetPriceNegative(): void
    {
        $cart = new Cart(-21);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(-24.99, round($netPrice, 2));
        $this->assertEquals(1.19, $cart->getTax());
    }

    public function testNetPriceZero(): void
    {
        $cart = new Cart(0);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(0, round($netPrice, 2));
        $this->assertEquals(1.19, $cart->getTax());
    }


    public function testSetPositiveTax(): void
    {
        $cart = new Cart(10);
        $cart->setTax(1.5);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(15, round($netPrice, 2));
        $this->assertEquals(1.5, $cart->getTax());
    }


    public function testSetNegativeTax(): void
    {
        $cart = new Cart(10);
        $cart->setTax(-2);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(-20, round($netPrice, 2));
        $this->assertEquals(-2, $cart->getTax());
    }


    public function testSetZeroTax(): void
    {
        $cart = new Cart(10);
        $cart->setTax(0);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(0, round($netPrice, 2));
        $this->assertEquals(0, $cart->getTax());
    }


    public function testTypeErrorIsThrownWhenSettingNullPrice(): void
    {
        $this->expectException(TypeError::class);

        $cart = new Cart(null);
        $cart->setTax(12);
        $netPrice = $cart->getNetPrice();

        $this->assertEquals(0, round($netPrice, 2));
        $this->assertEquals(0, $cart->getTax());
    }
}