<?php
namespace P23;
/**
 * Sources:
 * http://mathworld.wolfram.com/AbundantNumber.html
 */


class NonAbundantNumbers extends \Library\Timer {


	protected $sumAbundants = [];

	public function getSum() {
		$max = 28123;
		$notSummable = [];
		$abundantNumbers = [];
		for($i = 1; $i <= $max; $i++) {
			if((\Library\Divisors::sumOfDivisors($i) > $i)) {
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