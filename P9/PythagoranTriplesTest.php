<?php

namespace P9;

/**
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 * a^2 + b^2 = c^2
 * For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 */

require_once('PythagoranTriples.php');

class PythagoranTriplesTest extends \PHPUnit\Framework\TestCase
{

    public function testGetSumByC()
    {
        $pt = new PythagoranTriples();
        $ret = $pt->getSumByC(12);
        self::assertSame(60, $ret);
    }
}
