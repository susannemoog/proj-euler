<?php
/**
 * The sum of the squares of the first ten natural numbers is,
 * 1^2 + 2^2 + ... + 10^2 = 385
 *
 * The square of the sum of the first ten natural numbers is,
 *
 * (1 + 2 + ... + 10)^2 = 55^2 = 3025
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
 *
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 */

require_once('SumSquareDifference.php');

class SumSquareDifferenceTest extends PHPUnit_Framework_TestCase {

	public function testSumSquareDifference() {
		$ssd = new SumSquareDifference();
		$ret = $ssd->getDifference(100);
		$this->assertSame(2640, $ret);
	}
}
