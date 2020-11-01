<?php
namespace P37;

class TruncatablePrimesTest extends \PHPUnit\Framework\TestCase {

    public function testGetTruncatablePrimesSum()
    {
        $tp = new TruncatablePrimes();
        $ret = $tp->getTruncatablePrimesSum();
        self::assertSame(748317, $ret);
    }
}
