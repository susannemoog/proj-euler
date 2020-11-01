<?php
namespace P24;

class LexicographicPermutationsTest extends \PHPUnit\Framework\TestCase {

	public function testGetNthPermutation() {
		$lp = new LexicographicPermutations();
		$n = 1000000;
		$maxDigit = 9;
		$ret = $lp->getNthPermutation($n, $maxDigit);
		self::assertSame('2783915460', $ret);
	}
}
