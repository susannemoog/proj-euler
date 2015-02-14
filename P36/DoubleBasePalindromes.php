<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 17:58
 */

require_once('../Library/Palindrome.php');
class DoubleBasePalindromes {


    public function getPalindromeDoubleBased()
    {
        $max = 1000000;
        $sum = 0;
        for ($i=1; $i<$max; $i++) {
            if(Palindrome::isPalindrome($i) && Palindrome::isPalindrome(decbin($i))) {
                $sum += $i;
            }
        }
        return $sum;
    }
}