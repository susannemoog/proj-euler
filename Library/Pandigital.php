<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 19:09
 */

class Pandigital {
    public static function isPandigital($productDigits)
    {
        for ($i = 1; $i <= 9; $i++) {
            if (strpos($productDigits, (string)$i) === false) {
                return false;
            }
        }
        return true;
    }
}