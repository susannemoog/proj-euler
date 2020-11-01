<?php
namespace P35;

class CircularPrimesTest extends \PHPUnit\Framework\TestCase {

    public function testGetCircularPrimeCount()
    {
        $cp = new CircularPrimes();
        $ret = $cp->getCircularPrimeCount();
        self::assertSame(55, $ret);
    }
}
