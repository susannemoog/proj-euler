<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 10:09
 */

namespace P58;


class SpiralPrimesTest extends \PHPUnit_Framework_TestCase {

    public function testPrimeRatio()
    {
        $sp = new SpiralPrimes();
        $ret = $sp->primeRatioBelowTen();
        $this->assertSame(26241, $ret);
    }
}
