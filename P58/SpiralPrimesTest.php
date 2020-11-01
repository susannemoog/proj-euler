<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 10:09
 */

namespace P58;


class SpiralPrimesTest extends \PHPUnit\Framework\TestCase {

    public function testPrimeRatio()
    {
        $sp = new SpiralPrimes();
        $ret = $sp->primeRatioBelowTen();
        self::assertSame(26241, $ret);
    }
}
