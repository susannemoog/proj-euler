<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 21:01
 */

require_once('../Library/PrimeNumbers.php');
class FourDistinctPrimeFactors {

    public function getConsecutiveWithFourDistinctFactors()
    {
        $lowerBound = 2 * 3 * 5 * 7;
        $tempArr = [];
        $primes = PrimeNumbers::findPrimes(10000);
        for($i = $lowerBound; ; $i++) {
            $factors = PrimeNumbers::findPrimeFactorCountWithGivenPrimes($i, $primes);
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