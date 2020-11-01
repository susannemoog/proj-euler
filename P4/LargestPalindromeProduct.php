<?php

namespace P4;

class LargestPalindromeProduct extends \Library\Timer
{

    public function getLargestPalindromeProduct($digits)
    {
        $palindromes = [];
        $low = $this->getLowest($digits);
        $high = $this->getHighest($digits);
        $values = range($low, $high);
        $product = \Library\CartesianProduct::calculate($values, $values);
        foreach ($product as $possiblePalindrome) {
            if ($this->isPalindrome($possiblePalindrome)) {
                $palindromes[] = $possiblePalindrome;
            }
        }
        return max($palindromes);
    }

    protected function getLowest($digits)
    {
        $low = '1';
        for ($i = 1; $i <= ($digits - 1); $i++) {
            $low .= '0';
        }
        return (int)$low;
    }

    protected function getHighest($digits)
    {
        $high = '9';
        for ($i = 1; $i <= ($digits - 1); $i++) {
            $high .= '9';
        }
        return (int)$high;
    }

    protected function isPalindrome($possiblePalindrome)
    {
        return (string)$possiblePalindrome === strrev($possiblePalindrome);
    }
}
