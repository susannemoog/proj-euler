<?php
/**
 *
 *
 * A palindromic number reads the same both ways. The largest palindrome made
 * from the product of two 2-digit numbers is 9009 = 91 × 99.
 *
 * Find the largest palindrome made from the product of two 3-digit numbers.
 *
 */

require_once ('LargestPalindromeProduct.php');

class LargestPalindromeProductTest extends PHPUnit_Framework_TestCase {

	public function testGetLargestPalindromeProduct() {
		$lpp = new LargestPalindromeProduct();
		$ret = $lpp->getLargestPalindromeProduct(3);
		$this->assertSame(9009, $ret);
	}
}
