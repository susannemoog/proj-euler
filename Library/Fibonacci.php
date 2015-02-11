<?php

class Fibonacci {

	public static function getBigFibonacci($n) {
		bcscale(100);
		return static::bcround(bcdiv(bcpow(bcdiv(bcadd(bcsqrt(5), 1), 2), $n + 1), bcsqrt(5)));
	}

	public static function getFibonacci($n) {
		return (int)round(pow((sqrt(5) + 1) / 2, $n + 1) / sqrt(5));
	}

	static function bcround($number, $scale = 0) {
		$fix = "5";
		for($i = 0; $i < $scale; $i++) {
			$fix = "0$fix";
		}
		$number = bcadd($number, "0.$fix", $scale + 1);
		return bcdiv($number, "1.0", $scale);
	}
}