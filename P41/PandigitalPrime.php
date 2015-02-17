<?php
namespace P41;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 20:36
 */

class PandigitalPrime extends \Library\Timer {

    public function getLargestPandigitalPrime()
    {
        for($i=9; $i>0; $i--) {
            $primeMutations = [];
            $items = range(1,$i-1);
            $pandigitalsArr = \Library\Permutations::permutate($items);
            foreach($pandigitalsArr as $permutationArr) {
                $permutation = (int)$i . implode($permutationArr);
                if(\Library\PrimeNumbers::isPrime($permutation)) {
                    $primeMutations[] = $permutation;
                }
            }
            if($primeMutations) {
                return max($primeMutations);
            }
        }

    }
}