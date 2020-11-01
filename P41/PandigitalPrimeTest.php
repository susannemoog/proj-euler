<?php
namespace P41;

class PandigitalPrimeTest extends \PHPUnit\Framework\TestCase {

    public function testGetLargestPandigitalPrime()
    {
        $pp = new PandigitalPrime();
        $ret = $pp->getLargestPandigitalPrime();
        self::assertSame('7652413', $ret);
    }
}
