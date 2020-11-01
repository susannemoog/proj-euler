<?php

namespace P3;

/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 03.02.2015
 * Time: 22:05
 */
class LargestPrime extends \Library\Timer
{

    public function get($number)
    {
        bcscale(100);
        $primeFactors = [];
        $this->findFactor((string)$number, $primeFactors);
        return max($primeFactors);
    }

    protected function findFactor($number, &$primeFactors)
    {
        if ($number !== 1) {
            $number = (string)$number;
            for ($i = 2; $i <= bcsqrt($number); $i++) {
                if ((int)bcsqrt($number) == $i) {
                    $i = (int)$number;
                }
                if ($this->isMaybePrime($i)) {
                    if (bcmod($number, $i) == 0) {
                        $newNumber = bcdiv($number, $i);
                        $primeFactors[$i] = $i;
                        $this->findFactor($newNumber, $primeFactors);
                        break;
                    }
                } else {
                    continue;
                }
            }
        }
    }


    protected function isMaybePrime($number)
    {
        if ($number != 2 && $number % 2 === 0) {
            return false;
        }
        if (bcsqrt((string)$number) != (int)bcsqrt((string)$number)) {
            return true;
        }
        return false;
    }
}
