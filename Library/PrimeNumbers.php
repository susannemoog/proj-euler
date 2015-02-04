<?php

class PrimeNumbers {

	public static function isPrime($number){

		if ($number === 1 || ($number !==2 && $number % 2 === 0 ) ) {
			return false;
		}

		if ($number === 2) {
			return true;
		}

		$max = (int)sqrt($number)+1;

		for($divisor=3; $divisor<=$max; $divisor+=2) {
			if ($number % $divisor === 0) {
				return false;
			}
		}

		return true;
	}
}