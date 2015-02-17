<?php
namespace P7;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 04.02.15
 * Time: 15:50
 */

class calc10001stPrime extends \Library\Timer {

	public function returnNthPrime($nth) {
		$primeCounter = 0;
		for($i=1;; $i++) {
			if(\Library\PrimeNumbers::isPrime($i)) {
				$primeCounter++;
				if ($primeCounter === $nth) {
					return $i;
				}
			}
		}
		return 0;
	}
}