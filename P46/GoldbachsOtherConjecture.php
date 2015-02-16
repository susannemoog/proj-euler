<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 16.02.2015
 * Time: 20:27
 */
require_once('../Library/PrimeNumbers.php');
class GoldbachsOtherConjecture {

    public function getNonMatching()
    {
        $primes = PrimeNumbers::findPrimes(10000);
        for($i=35; ;$i+=2) {
            if (PrimeNumbers::isPrime($i)) {
                continue;
            }
            $sumOfPrimeAndSquare = false;
            foreach($primes as $prime) {
                $twiceSquareCheck = (sqrt(($i - $prime)/2));
                if($twiceSquareCheck == round($twiceSquareCheck)) {
                    $sumOfPrimeAndSquare = true;
                    break;
                }
            }
            if ($sumOfPrimeAndSquare === false) {
                return $i;
            }
        }
    }
}