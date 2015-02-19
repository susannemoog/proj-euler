<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 19.02.2015
 * Time: 20:35
 */

namespace P51;

require_once('PrimeDigitReplacements.php');
class PrimeDigitReplacementsTest extends \PHPUnit_Framework_TestCase {

    public function testGetPrimeFromFamilyOfEight()
    {
        $pdr = new PrimeDigitReplacements();
        $ret = $pdr->getPrimeFromFamilyOfEight();
        $this->assertSame(121313, $ret);
    }
}
