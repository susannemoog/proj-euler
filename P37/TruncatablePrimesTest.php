<?php
namespace P37;

class TruncatablePrimesTest extends \PHPUnit_Framework_TestCase {

    public function testGetTruncatablePrimesSum()
    {
        $tp = new TruncatablePrimes();
        $ret = $tp->getTruncatablePrimesSum();
        $this->assertSame(748317, $ret);
    }
}
