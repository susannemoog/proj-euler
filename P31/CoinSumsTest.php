<?php
namespace P31;

class CoinSumsTest extends \PHPUnit_Framework_TestCase {

    public function testGetCoinSumWaysForN()
    {
        $n = 200;
        $cs = new CoinSums();
        $ret = $cs->getCoinSumWaysForN($n);
        $this->assertSame(73682, $ret);
    }
}
