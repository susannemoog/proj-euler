<?php
namespace P23;

class NonAbundantNumbersTest extends \PHPUnit\Framework\TestCase {

	public function testGetSumOfNonAbundantNumbers() {
		$nan = new NonAbundantNumbers();
		$ret = $nan->getSum();
		self::assertSame(4179871, $ret);
	}
}
