<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 19:10
 */

namespace P49;


class PrimePermutationsTest extends \PHPUnit\Framework\TestCase {

    public function testGetPrimePermutationSequence()
    {
        $pp = new PrimePermutations();
        $ret = $pp->getPrimePermutationSequence();
        self::assertSame('296962999629', $ret);
    }
}
