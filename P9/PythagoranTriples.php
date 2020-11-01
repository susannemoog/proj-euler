<?php

namespace P9;

/**
 * A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
 * a2 + b2 = c2
 * For example, 32 + 42 = 9 + 16 = 25 = 52.
 * There exists exactly one Pythagorean triplet for which a + b + c = 1000.
 * Find the product abc.
 */
class PythagoranTriples extends \Library\Timer
{

    public function getSumByC($int)
    {
        $givenC = $int;
        for ($a = 1; $a <= $givenC / 3; $a++) {
            for ($b = $a + 1; $b <= $givenC / 2; $b++) {
                $c = $givenC - $a - $b;
                if (pow($a, 2) + pow($b, 2) == pow($c, 2)) {
                    return $a * $b * $c;
                }
            }
        }
    }
}
