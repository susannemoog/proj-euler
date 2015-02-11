<?php
/**
 * calculating with the formula from P2 is too slow
 * we know that length of 10^x is x+1, so 10^999 has
 * length 1000 (smallest number with that length)
 * we loop until our number is bigger than that and has
 * therefor more than or equal to 1000 digits
 */

class ThousandDigitFibonacci {


	public function getThousandDigitFibonacci() {
		$fibonacci = 1;
		$firstNumber = 0;
		$secondNumber = 1;
		$length = 1000;

		$i = 1;

		$limit = bcpow(10, $length-1);

		while (bccomp($fibonacci, $limit) == -1) {
			$fibonacci = bcadd($firstNumber, $secondNumber);
			$firstNumber = $secondNumber;
			$secondNumber = $fibonacci;
			$i++;
		}
		return $i;
	}
}