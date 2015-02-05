<?php

class PrimeNumbers {

	public $primes = [];

	public static function isPrime($number) {

		if($number === 1 || ($number !== 2 && $number % 2 === 0)) {
			return false;
		}

		if($number === 2) {
			return true;
		}

		$max = (int)bcsqrt((string)$number) + 1;

		for($divisor = 3; $divisor <= $max; $divisor += 2) {
			if($number % $divisor === 0) {
				return false;
			}
		}

		return true;
	}

	public static function getPrimes($max) {
		$number = 2;
		$range = range(2, $max);
		$primes = array_combine($range, $range);
		while($number * $number < $max) {
			for($i = $number; $i <= $max; $i += $number) {
				if($i == $number) {
					continue;
				}
				unset($primes[$i]);
			}
			$number = next($primes);
		}
		return $primes;
	}

	public function findPrimeFactorsWithDuplicates($number) {
		$primeFactors = array();
		for($i = 2; $i <= $number; $i++) {
			if(empty($this->primes[$i])) {
				if(self::isPrime($i)) {
					$this->primes[] = $i;
				} else {
					continue;
				}
			}
			while($number % $i == 0) {
				$primeFactors[$i][] = $i;
				$number = $number / $i;
			}
		}
		return $primeFactors;
	}


	protected static function isMaybePrime($number) {
		if($number != 2 && $number % 2 === 0) {
			return false;
		}
		if(bcsqrt((string)$number) != (int)bcsqrt((string)$number)) {
			return true;
		}
		return false;
	}
}