<?php
namespace Library;

class Factorial {

	public static function getFactorials($factorial) {
		if($factorial < 2) {
			$factorial = 1;
		} else {
			$factorial = (string) $factorial;
			for($i = bcsub($factorial, 1); $i > 1; $i--) {
				$factorial = bcmul($factorial, $i);
			}
		}
		return (string)($factorial);
	}
}