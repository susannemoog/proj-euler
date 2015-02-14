<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 18:57
 */

require_once('../Library/Pandigital.php');
class PandigitalMultiples {

    public function getLargestPandigitalMultiple()
    {
        /* needs to be a 4 digit number to get 9 digit result,
           - needs to start with 9 as the example already gave a number starting with
           9 and we want the largest

           additionally number has to be a 4 digit number, as we can't get a 9 digit number
           product with 2 or 3 digit numbers (8 and 11 digits, 7 and 11 digits)

           therefore n = 2, and number = 4 digits > 9123
        */
        $lowerBound = 9123;
        $upperBound = 9876;

        for($i=$upperBound; $i>=$lowerBound; $i--) {
            $result = (string)($i . (2 * $i));
            if(Pandigital::isPandigital($result)) {
                return $result;
            }
        }
        return false;
    }
}