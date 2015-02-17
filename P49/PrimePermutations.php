<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 19:10
 */

namespace P49;


use Library\Permutations;
use Library\PrimeNumbers;

class PrimePermutations
{

    public function getPrimePermutationSequence()
    {
        $primes = PrimeNumbers::findPrimes(9999);
        $primeCount = count($primes);
        $limit = 10000;
        $result = '';
        for ($i = 0; $i < $primeCount; $i++) {
            if($primes[$i] < 1000 || $primes[$i] == 1487) {
                continue;
            }
            for ($j = $i + 1; $j < $primeCount; $j++) {
                $k = $primes[$j] + ($primes[$j] - $primes[$i]);
                if ($k > 999 && $k < $limit && PrimeNumbers::isPrime($k)) {
                    if (Permutations::isPermutation($primes[$i], $primes[$j]) &&
                        Permutations::isPermutation($primes[$i], $k)) {
                        $result = $primes[$i] . $primes[$j] . $k;
                        break;
                    }
                }
            }
            if (strlen($result) > 0) {
                break;
            }
        }
        return $result;
    }
}