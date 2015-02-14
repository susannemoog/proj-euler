<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 15:01
 */

require_once('CircularPrimes.php');
class CircularPrimesTest extends PHPUnit_Framework_TestCase {

    public function testGetCircularPrimeCount()
    {
        $cp = new CircularPrimes();
        $ret = $cp->getCircularPrimeCount();
        $this->assertSame(13, $ret);
    }
}
