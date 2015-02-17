<?php
namespace P46;

class GoldbachsOtherConjecture extends \Library\Timer {

    public function getNonMatching()
    {
        $primes = \Library\PrimeNumbers::findPrimes(10000);
        for($i=35; ;$i+=2) {
            if (\Library\PrimeNumbers::isPrime($i)) {
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