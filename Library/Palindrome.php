<?php
namespace Library;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 17:56
 */

class Palindrome {
    public static function isPalindrome($possiblePalindrome) {
        return (string)$possiblePalindrome === strrev($possiblePalindrome);
    }
}