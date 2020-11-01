<?php

namespace P2;

/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 03.02.2015
 * Time: 21:02
 */
class EvenFibonacciNumbersTest extends \PHPUnit\Framework\TestCase
{

    public function testSumOfFibonacci()
    {
        $efbn = new EvenFibonacciNumbers();
        $ret = $efbn->sumOfFibonacci(90);
        self::assertSame(44, $ret);
    }
}

