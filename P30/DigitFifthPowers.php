<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 11:51
 */

class DigitFifthPowers {

	public function getSumOfFifthPowerDigitNumbers() {
		$pow = 5;
		$upperBound = bcmul($pow, bcpow(9,$pow));
		$fifthPowerArray = [
			0 => '0',
			1 => '1',
			2 => bcpow(2,$pow),
			3 => bcpow(3,$pow),
			4 => bcpow(4,$pow),
			5 => bcpow(5,$pow),
			6 => bcpow(6,$pow),
			7 => bcpow(7,$pow),
			8 => bcpow(8,$pow),
			9 => bcpow(9,$pow)
		];

		$foundSums = 0;

		for($i=2; $i<$upperBound; $i++) {
			$number = $i;
			$sumOfPowers = 0;
			while ($number > 0) {
				$digit = $number % 10;
				$number /= 10;
				$sumOfPowers += $fifthPowerArray[$digit];
			}
			if($sumOfPowers === $i) {
				$foundSums+=$i;
			}
		}
		return $foundSums;
	}
}
