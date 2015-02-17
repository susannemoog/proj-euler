<?php
namespace P35;

class CircularPrimesTest extends \PHPUnit_Framework_TestCase {

    public function testGetCircularPrimeCount()
    {
        $cp = new CircularPrimes();
        $ret = $cp->getCircularPrimeCount();
        $this->assertSame(55, $ret);
    }
}
