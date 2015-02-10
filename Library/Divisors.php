<?php

class Divisors {

	public static function sumOfDivisors($n) {
		$sum = 1;
		$sqrt = sqrt($n);
		for($i = 2; $i <= 1 + $sqrt; $i++) {
			if($n % $i == 0) {
				$sum = $sum + $i + $n / $i;
			}
		}
		return $sum;
	}
}