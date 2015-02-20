<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 19.02.2015
 * Time: 20:35
 */

namespace P51;

use Library\PrimeNumbers;
use Library\Timer;


class PrimeDigitReplacements extends Timer {

	public function getPrimeFromFamilyOfEight() {
		$searchNumber = 8;
		$result = 0;
		$number = 10007;
		while($result == 0) {
			if(PrimeNumbers::isPrime($number)) {
				for($swap = 0; $swap <= 3; $swap++) {
					$returnCount = 0;
					if(preg_match_all('/' . $swap .  '/', $number) === 3) {
						$returnCount = $this->checkPossiblePrimes($number, $swap);
					}
					if($returnCount >= $searchNumber) {
						$result = $number;
						break 2;
					}
				}
			}
			$number += 2;
		}
		return $result;
	}

	private function checkPossiblePrimes($num, $swap) {
		$strNum = (string)$num;
		$strSwap = (string)$swap;
		if(strpos($strNum, $strSwap) !== FALSE) {
			$counter = 0;
			for($i = 0; $i <= 9; $i++) {
				$testStr = str_replace($strSwap, $i, $strNum);
				if(PrimeNumbers::isPrime($testStr) && strlen(intval($testStr)) == strlen($strNum)) {
					$counter++;
				}
			}
			return $counter;
		}
		return 0;
	}
}