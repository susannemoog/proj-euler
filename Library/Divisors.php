<?php
namespace Library;

class Divisors {

	public static function sumOfDivisors($n) {
		$sum[] = 1;
		$sqrt = sqrt($n);
		for($i = 2; $i <= $sqrt; $i++) {
			if($n % $i == 0) {
				$sum[$i] = $i;
				$sum[$n/$i] = (int)$n / $i;
			}
		}
		return array_sum($sum);
	}
}