<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 10:09
 */

namespace P58;


use Library\PrimeNumbers;

class SpiralPrimes {

    public function primeRatioBelowTen()
    {
        $primes = 0;
        $multiplicator = 1;
        $numb = 1;
        for($i=1;; $i+=4) {
            for($j=0; $j<4; $j++) {
                $numb = $numb + (2*$multiplicator);
                if(PrimeNumbers::isPrime($numb)) {
                    $primes++;
                }
            }
            $ratio = ($primes/$i) * 100;
            if($ratio < 10) {
                return $i%2 ? ($i+1)/2 : $i;
            }
            $multiplicator++;
        }
    }
}