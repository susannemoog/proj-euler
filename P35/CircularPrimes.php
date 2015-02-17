<?php
namespace P35;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 15:01
 */

class CircularPrimes extends \Library\Timer {

    public function getCircularPrimeCount()
    {
        ini_set('memory_limit', '2048M');
        $max = 1000000;
        $circularPrimes = [];
        $primes = \Library\PrimeNumbers::getPrimes(1000000);
        $primes = array_filter($primes, function($prime) {
            $noWay = [
                0,
                2,
                4,
                5,
                6,
                8
            ];
            $replaceNoWay = ['','', '', '', '', ''];
            if (!(strlen(str_replace($noWay, $replaceNoWay, $prime)) == strlen($prime))) {
                return 0;
            }
            return $prime;
        });
        foreach($primes as $prime) {
            if($prime > $max ){
                break;
            }
            if(strlen($prime) === 1) {
                $circularPrimes[$prime] = $prime;
                continue;
            }
            if(isset($circularPrimes[$prime])) {
                continue;
            }
            $permutations = \Library\Permutations::permutateCyclomatic(str_split($prime));
            $circularPrime = false;
            $tempArr = [];
            foreach($permutations as $permutation) {
                $permutation = implode('', $permutation);
                $tempArr[$permutation] = $permutation;
                if(!isset($primes[$permutation])) {
                    $circularPrime=false;
                    break;
                }
                $circularPrime = true;
            }
            if($circularPrime) {
               $circularPrimes += $tempArr;
            }
        }

        $filteredCircularPrimes = array_filter($circularPrimes, function($cPrime) use ($max) {
            if($cPrime>$max)
            {
                return false;
            } else {
                return true;
            }
        });
        return count($filteredCircularPrimes) + 2 ; // need to add 2 and 5 again ;)
    }
}