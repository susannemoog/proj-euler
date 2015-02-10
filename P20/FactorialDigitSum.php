<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 06:58
 */

require_once('../Library/Factorial.php');
class FactorialDigitSum {

	public function getSum($n) {
		return array_sum(str_split(Factorial::getFactorials($n)));
	}
}