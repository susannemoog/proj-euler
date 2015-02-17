<?php
namespace P36;

class DoubleBasePalindromes extends \Library\Timer {

    public function getPalindromeDoubleBased()
    {
        $max = 1000000;
        $sum = 0;
        for ($i=1; $i<$max; $i++) {
            if(\Library\Palindrome::isPalindrome($i) && \Library\Palindrome::isPalindrome(decbin($i))) {
                $sum += $i;
            }
        }
        return $sum;
    }
}