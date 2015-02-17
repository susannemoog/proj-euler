<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 21:18
 */

namespace P50;


use Library\PrimeNumbers;

class ConsecutivePrimes {

    public function getConsecutivePrimes($max)
    {
        $primes = PrimeNumbers::findPrimes($max);
        $primeCount = count($primes);
        $sumArr = [0 => 0];
        $numberOfPrimes = 0;
        for($i=0; $i < $primeCount; $i++) {
            $sumArr[$i+1] = $sumArr[$i] + $primes[$i];
        }
        $sumCount = count($sumArr);
        for($j=0; $j < $sumCount; $j++) {
            for($k=$j-($numberOfPrimes+1); $k>=0; $k--) {
                $prevPrime = $sumArr[$j] - $sumArr[$k];
                if($prevPrime > $max) {
                    break;
                }
                if(in_array($prevPrime, $primes)) {
                    $numberOfPrimes = $j - $k;
                    $result = $prevPrime;
                }
            }
        }
        return $result;
    }
}