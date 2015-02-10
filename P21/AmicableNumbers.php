<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 07:23
 */

require_once('../Library/Divisors.php');
class AmicableNumbers {

	public function getAmicableNumberPairsSum($max) {
		$pairs = [];
		for($i=1; $i<$max; $i++) {
			$p1 = Divisors::sumOfDivisors($i);
			if ($p1 !== $i && Divisors::sumOfDivisors($p1) === $i) {
				$pairs[] = $i;
				$pairs[] = $p1;
			}
		}
		return array_sum(array_unique($pairs));
	}
}