<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 18:19
 */

require_once('TruncatablePrimes.php');
class TruncatablePrimesTest extends PHPUnit_Framework_TestCase {

    public function testGetTruncatablePrimesSum()
    {
        $tp = new TruncatablePrimes();
        $ret = $tp->getTruncatablePrimesSum();
        $this->assertSame(748317, $ret);
    }
}
