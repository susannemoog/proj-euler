<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 21:18
 */

namespace P50;


class ConsecutivePrimesTest extends \PHPUnit_Framework_TestCase {

    public function testGetConsecutivePrimes()
    {
        $max = 1000000;
        $cp = new ConsecutivePrimes();
        $ret = $cp->getConsecutivePrimes($max);
        $this->assertSame(997651, $ret);
    }
}
