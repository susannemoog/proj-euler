<?php
namespace P20;

class FactorialDigitSum extends \Library\Timer {

	public function getSum($n) {
		return array_sum(str_split(\Library\Factorial::getFactorials($n)));
	}
}