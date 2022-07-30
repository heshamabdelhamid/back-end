<?php

namespace App\Unit;

use App\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    // how to run all tests ./vendor/bin/phpunit src/Unit/ProductTest.php
    // how to run one test ./vendor/bin/phpunit src/Unit/ProductTest.php --filter functionName

    public function testIfIncreaseQuantityFunctionWork() // test 1
    {
        // given
        $product = new Product('mobile', 6);

        // when 
        $product->increaseQuantity(4);

        // then
        //assertEquals($expected, $actual, option string $message = '')
        $this->assertEquals(10, $product->getQuantity()); //assertion 1
    }

    public function testIfQuantityIfZeroOrLessThenThrowException() // test 2
    {
        // given
        $product = new Product('mobile', 6);

        $this->expectException(\InvalidArgumentException::class); //assertion 2
        $this->expectExceptionMessage('the quantity can\'t be zero or less'); //assertion 3

        // when 
        $product->increaseQuantity(0);
    }

    // TDD ==> Test Driving Developement
    // كتابة التيست قبل الفنكشن 

    public function testThatDecreaseQuantityFunctionWorks() // test 3
    {
        $product = new Product('laptop', 3);

        $product->decreaseQuantity(2);

        $this->assertEquals(1, $product->getQuantity()); //assertion 4
    }

    public function testIfQuantityLessThanZeroMakeItZero() // test 4
    {
        // given
        $product = new Product('laptop', 3);

        // when
        $product->decreaseQuantity(4);

        //  then
        $this->assertEquals(0, $product->getQuantity()); //assertion 5
    }
}