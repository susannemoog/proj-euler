<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 07:44
 */

require_once('../Library/PrimeNumbers.php');
class SumOfPrimes {

	public function getSumOfPrimes($max) {
		$sum = 2;
		for($i=3; $i<=$max;$i+=2) {
			$sum += PrimeNumbers::isPrime($i) ? $i : 0;
		}
		return $sum;
	}
}