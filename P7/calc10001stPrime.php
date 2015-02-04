<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 04.02.15
 * Time: 15:50
 */

require_once ('../Library/PrimeNumbers.php');
class calc10001stPrime {

	public function returnNthPrime($nth) {
		$primeCounter = 0;
		for($i=1;; $i++) {
			if(PrimeNumbers::isPrime($i)) {
				$primeCounter++;
				if ($primeCounter === $nth) {
					return $i;
				}
			}
		}
		return 0;
	}
}