<?php

namespace P4;

/**
 * A palindromic number reads the same both ways. The largest \Library\Palindrome made
 * from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest \Library\Palindrome made from the product of two 3-digit numbers.
 */
class LargestPalindromeProductTest extends \PHPUnit\Framework\TestCase
{

    public function testGetLargestPalindromeProduct()
    {
        $lpp = new LargestPalindromeProduct();
        $ret = $lpp->getLargestPalindromeProduct(3);
        self::assertSame(906609, $ret);
    }
}
