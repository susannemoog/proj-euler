<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 20:36
 */
require_once('PandigitalPrime.php');
class PandigitalPrimeTest extends PHPUnit_Framework_TestCase {

    public function testGetLargestPandigitalPrime()
    {
        $pp = new PandigitalPrime();
        $ret = $pp->getLargestPandigitalPrime();
        $this->assertSame('7652413', $ret);
    }
}
