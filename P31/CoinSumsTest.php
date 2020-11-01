<?php
namespace P31;

class CoinSumsTest extends \PHPUnit\Framework\TestCase {

    public function testGetCoinSumWaysForN()
    {
        $n = 200;
        $cs = new CoinSums();
        $ret = $cs->getCoinSumWaysForN($n);
        self::assertSame(73682, $ret);
    }
}
