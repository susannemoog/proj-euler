<?php
namespace P3;
/**
 * The prime factors of 13195 are 5, 7, 13 and 29.

What is the largest prime factor of the number 600851475143 ?

 */

class LargestPrimeTest extends \PHPUnit_Framework_TestCase {

    public function testGetLargestPrime()
    {
        $lp = new LargestPrime();
        $ret = $lp->get(600851475143);
        $this->assertSame(29, $ret);
    }
}
