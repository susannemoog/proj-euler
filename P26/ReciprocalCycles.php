<?php
namespace P26;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 11.02.2015
 * Time: 18:40
 */

class ReciprocalCycles extends \Library\Timer {

    public function longestReciprocalCycleBelowThousand()
    {
        $highestReciprocal = 0;
        $max = 0;
        for($i=1000; $i>1; $i--) {
            $digits = [];
            $remainder = 1;
            $digitPosition = 0;
            while(empty($digits[$remainder]) && $remainder != 0) {
                $digits[$remainder] = $digitPosition;
                $remainder *= 10;
                $remainder %= $i;
                $digitPosition++;
            }
            $len = count($digits);
            if ($len > $max) {
                $max = $len;
                $highestReciprocal = $i;
            }
            if ($i < $max-1) {
                break;
            }
        }
        return $highestReciprocal;
    }
}