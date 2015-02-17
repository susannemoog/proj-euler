<?php
namespace P18;
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 06:26
 *
 * 	3
   7 4
  2 4 6
 8 5 9 3
 */

class MaximumPathSum1 extends \Library\Timer {

	public static function getSum($triangle) {
		$size = count($triangle);
		for($i=$size-1; $i>0; $i--) {
			$newLine = [];
			foreach($triangle[$i-1] as $index => $number) {
				$newLine[] = max(($number + $triangle[$i][$index]), ($number + $triangle[$i][$index+1]));
			}
			$triangle[$i-1] = $newLine;
			unset($triangle[$i]);
		}
		return ($triangle[0][0]);
	}
}