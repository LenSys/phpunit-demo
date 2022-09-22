<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{
    /** @test */
    public function testThatStringsMatch(): void
    {
        $firstString = "Hello world";
        $secondString = "Hello world";

        $this->assertSame($firstString, $secondString);
    }


    public function testTwoNumbersAddUp(): void
    {
        $number1 = 50;
        $number2 = 10.5;

        $this->assertSame( 60.5, $number1 + $number2);
        
    }
}