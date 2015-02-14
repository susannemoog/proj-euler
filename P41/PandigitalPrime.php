<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 20:36
 */

require_once('../Library/Permutations.php');
require_once('../Library/PrimeNumbers.php');
class PandigitalPrime {

    public function getLargestPandigitalPrime()
    {
        for($i=9; $i>0; $i--) {
            $primeMutations = [];
            $items = range(1,$i-1);
            $pandigitalsArr = Permutations::permutate($items);
            foreach($pandigitalsArr as $permutationArr) {
                $permutation = (int)$i . implode($permutationArr);
                if(PrimeNumbers::isPrime($permutation)) {
                    $primeMutations[] = $permutation;
                }
            }
            if($primeMutations) {
                return max($primeMutations);
            }
        }

    }
}