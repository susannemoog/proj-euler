<?php
namespace P16;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 14:55
 */

class SumOfPowDigits extends \Library\Timer {

	public function getSumOfPow($pow) {
		return array_sum(str_split(bcpow(2, $pow)));
	}
}