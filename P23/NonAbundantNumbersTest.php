<?php
namespace P23;

class NonAbundantNumbersTest extends \PHPUnit_Framework_TestCase {

	public function testGetSumOfNonAbundantNumbers() {
		$nan = new NonAbundantNumbers();
		$ret = $nan->getSum();
		$this->assertSame(4179871, $ret);
	}
}
