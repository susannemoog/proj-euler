<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 12.02.2015
 * Time: 19:32
 */

require_once('CoinSums.php');
class CoinSumsTest extends PHPUnit_Framework_TestCase {

    public function testGetCoinSumWaysForN()
    {
        $n = 200;
        $cs = new CoinSums();
        $ret = $cs->getCoinSumWaysForN($n);
        $this->assertSame(73682, $ret);
    }
}
