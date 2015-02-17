<?php
namespace Library;
/**
 *
 * from http://en.wikipedia.org/wiki/Binary_GCD_algorithm
 */
class Denominators {
    public static function gcd($u, $v)
    {
        if ($u == 0) return $v;
        if ($v == 0) return $u;

        for ($shift = 0; (($u | $v) & 1) == 0; ++$shift) {
            $u >>= 1;
            $v >>= 1;
        }

        while (($u & 1) == 0)
            $u >>= 1;

        do {
            while (($v & 1) == 0)
                $v >>= 1;

            if ($u > $v) {
                $t = $v;
                $v = $u;
                $u = $t;
            }

            $v = $v - $u;
        } while ($v != 0);

        return $u << $shift;
    }
}