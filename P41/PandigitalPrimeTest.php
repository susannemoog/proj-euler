<?php
namespace P41;

class PandigitalPrimeTest extends \PHPUnit_Framework_TestCase {

    public function testGetLargestPandigitalPrime()
    {
        $pp = new PandigitalPrime();
        $ret = $pp->getLargestPandigitalPrime();
        $this->assertSame('7652413', $ret);
    }
}
