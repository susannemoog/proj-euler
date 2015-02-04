<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 03.02.2015
 * Time: 21:02
 */

require_once('EvenFibonacciNumbers.php');
class EvenFibonacciNumbersTest extends PHPUnit_Framework_TestCase {

    public function testSumOfFibonacci()
    {
        $efbn = new EvenFibonacciNumbers();
        $ret = $efbn->sumOfFibonacci(90);
        $this->assertSame(44, $ret);
    }
}

