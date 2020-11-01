<?php

namespace P12;

/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 08:27
 */

require_once(dirname(dirname(__FILE__)) . '/Library/PrimeNumbers.php');

class DivisableTriangleNumber extends \Library\Timer
{

    public function triangleWithXDivisors($divisorCount)
    {
        $add = 1;
        $triangle = 0;
        $pn = new \Library\PrimeNumbers();
        for ($i = 1; ; $i++) {
            $triangle += $i * $add;
            $primeFactors = $pn->findPrimeFactorsWithDuplicates($triangle);
            $divisors = 1;
            foreach ($primeFactors as $all) {
                $factorPower = count($all);
                $divisors *= $factorPower + 1;
            }

            if ($divisors >= $divisorCount) {
                break;
            }
        }
        return $triangle;
    }
}
