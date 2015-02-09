<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 12:49
 */

class LongestCollatzSequence {


	public function getLongest() {

		$cache[] = 0;
		for($i=2; $i<1000000; $i++) {
			$value = $i;
			$seq = 0;
			while($value > 1) {
				if(isset($cache[$value])) {
					$seq += $cache[$value];
					break;
				}
				if($value % 2 === 0) {
					$value = $value/2;
				} else {
					$value = 3*$value +1;
				}
				$seq++;
			};
			$cache[$i] = $seq;
		}
		$max = max($cache);
		$flippo = array_flip($cache);
		return $flippo[$max];
	}
}