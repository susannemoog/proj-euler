<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 18:19
 */
require_once('../Library/PrimeNumbers.php');
class TruncatablePrimes {

    public function getTruncatablePrimesSum()
    {
        ini_set('memory_limit', '2048M');
        $primes = PrimeNumbers::getPrimes(1000000);
        $primes = array_filter($primes, function($prime) {
            $noWay = [
                0,
                2,
                4,
                6,
                8
            ];
            $replaceNoWay = ['','', '', '', '', ''];
            if (!(strlen(str_replace($noWay, $replaceNoWay, $prime)) == strlen($prime))) {
                return 0;
            }
            return $prime;
        });
        // add 23 manually then we don't have to worry about the 2
        $truncatablePrimes = [23 => 23];
        foreach($primes as $prime) {
            // need to go up to 14 as we will remove 3, 5, 7 later
            if(count($truncatablePrimes) == 14){
                break;
            }
            $leftArr = str_split($prime);
            $rightArr = array_reverse($leftArr);
            $primeLength = strlen($prime);
            $truncatable = true;
            for($i=0; $i < $primeLength; $i++) {
                unset($leftArr[$i]);
                unset($rightArr[$i]);
                if(($leftArr && !isset($primes[implode($leftArr)])) || ($rightArr && !isset($primes[implode(array_reverse($rightArr))]))) {
                    $truncatable = false;
                    break;
                }
            }
            if (!$truncatable) {
                continue;
            }
            $truncatablePrimes[$prime] = $prime;
        }
        unset($truncatablePrimes[3]);
        unset($truncatablePrimes[5]);
        unset($truncatablePrimes[7]);
        return array_sum($truncatablePrimes);
    }
}