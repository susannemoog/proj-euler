<?php
/**
 * Sources:
 * http://mathworld.wolfram.com/AbundantNumber.html
 *
 *
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 09:00
 */

require_once('../Library/Divisors.php');
require_once('../Library/CartesianProduct.php');

class NonAbundantNumbers {


	protected $sumAbundants = [];

	public function getSum() {
		$max = 28123;
		$notSummable = [];
		$abundantNumbers = [];
		for($i = 1; $i <= $max; $i++) {
			if((Divisors::sumOfDivisors($i) > $i)) {
				$abundantNumbers[] = $i;
				foreach($abundantNumbers as $number) {
					$this->sumAbundants[$number+$i] = true;
				}
			}
			if(!$this->isSumOfAbundants($i)) {
				$notSummable[] = $i;
			}
		}
		return array_sum($notSummable);
	}

	private function isSumOfAbundants($n) {
		if(isset($this->sumAbundants[$n])) {
			return true;
		}
		return false;
	}



}