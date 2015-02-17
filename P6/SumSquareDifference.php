<?php
namespace P6;
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
 *
 */

class SumSquareDifference extends \Library\Timer {

	public function getDifference($max) {
		$sumSquares = 0;
		$squareSum = 0;
		for($i=1; $i <= $max; $i++) {
			$sumSquares += pow($i, 2);
			$squareSum += $i;
		}
		return pow($squareSum, 2) - $sumSquares;
	}
}