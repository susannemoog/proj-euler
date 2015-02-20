<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 20.02.15
 * Time: 06:53
 */
namespace P52;
use Library\Permutations;
use Library\Timer;

class PermutedMultiples extends Timer {

	public function getSmallestPermutedMultipleOfMax6() {

		for($i=10; ; $i++) {
			// same digit length
			if((strlen($i) !== strlen($n6 = $i*6)) ||
				(strlen($i) !== strlen($n5 = $i*5)) ||
				(strlen($i) !== strlen($n4 = $i*4)) ||
				(strlen($i) !== strlen($n3 = $i*3)) ||
				(strlen($i) !== strlen($n2 = $i*2))
			) {
				continue;
			}
			if(
				Permutations::isPermutation($i, $n2) &&
				Permutations::isPermutation($n2, $n3) &&
				Permutations::isPermutation($n2, $n4) &&
				Permutations::isPermutation($n2, $n5) &&
				Permutations::isPermutation($n2, $n6)
			) {
				return $i;
			}
		}
	}
}