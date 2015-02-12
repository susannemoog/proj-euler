<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 07:36
 */

class NumberSpiral {

	public function getSpiralSum($n) {
		$sum = 1;
		$summables = $n % 2 ? ($n*2-1) : $n * 2;
		$multiplicator = 1;
		$numb = 1;
		$sumCnt = 1;
		for($i=1; $sumCnt<$summables; $i+=4) {
			for($j=0; $j<4; $j++) {
				$sum += $numb = $numb + (2*$multiplicator);
				$sumCnt++;
			}
			$multiplicator++;
		}
		return $sum;
	}
}