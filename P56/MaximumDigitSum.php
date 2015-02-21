<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 08:52
 */

namespace P56;


class MaximumDigitSum {

    public function getMaximumDigitSum()
    {
        $max = 99;
        $maxSum = 0;
        for($a=$max; $a>0; $a--) {
            for($b=$max; $b>0; $b--) {
                $number = bcpow($a, $b);
                $tempSum = array_sum(str_split($number));
                if(9 * log10($number) < $maxSum) {
                    break;
                }
                if($tempSum > $maxSum) {
                    $maxSum = $tempSum;
                }
            }
        }
        return $maxSum;
    }
}