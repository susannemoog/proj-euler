<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 04.02.15
 * Time: 13:43
 *
 * Time: 7.99 seconds, Memory: 5.00Mb
 */

class SmallestMultiple {

	public function getSmallestMultiple($max) {
		$smallest = 0;
		$divisors = range(1, $max);
		for ($i=$max;; $i+=$max) {
			foreach($divisors as $divisor) {
				if($i%$divisor !== 0) {
					continue 2;
				}
			}
			$smallest = $i;
			break;
		}

		return $smallest;
	}
}