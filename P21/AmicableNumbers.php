<?php
namespace P21;

class AmicableNumbers extends \Library\Timer {

	public function getAmicableNumberPairsSum($max) {
		$pairs = [];
		for($i=1; $i<$max; $i++) {
			$p1 = \Library\Divisors::sumOfDivisors($i);
			if ($p1 !== $i && \Library\Divisors::sumOfDivisors($p1) === $i) {
				$pairs[] = $i;
				$pairs[] = $p1;
			}
		}
		return array_sum(array_unique($pairs));
	}
}