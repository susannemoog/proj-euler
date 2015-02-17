<?php
namespace P47;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 21:01
 */

class FourDistinctPrimeFactors extends \Library\Timer {

    public function getConsecutiveWithFourDistinctFactors()
    {
        $lowerBound = 2 * 3 * 5 * 7;
        $tempArr = [];
        $primes = \Library\PrimeNumbers::findPrimes(10000);
        for($i = $lowerBound; ; $i++) {
            $factors = \Library\PrimeNumbers::findPrimeFactorCountWithGivenPrimes($i, $primes);
            if($factors == 4 ) {
                $tempArr[] = $i;
            } else {
                $tempArr = [];
            }
            if(count($tempArr) == 4) {
                return $tempArr[0];
            }
        }

    }
}