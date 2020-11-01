<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 19.02.2015
 * Time: 20:35
 */

namespace P51;

class PrimeDigitReplacementsTest extends \PHPUnit\Framework\TestCase {

    public function testGetPrimeFromFamilyOfEight()
    {
        $pdr = new PrimeDigitReplacements();
        $ret = $pdr->getPrimeFromFamilyOfEight();
        self::assertSame(121313, $ret);
    }
}
