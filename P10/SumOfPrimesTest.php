<?php

namespace P10;

/**
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 * Find the sum of all the primes below two million.
 */
class SumOfPrimesTest extends \PHPUnit\Framework\TestCase
{

    public function testGetSumOfPrimes()
    {
        $sop = new SumOfPrimes();
        $ret = $sop->getSumOfPrimes(10);
        self::assertSame(17, $ret);
    }
}
