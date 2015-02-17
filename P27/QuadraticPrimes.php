<?php
namespace P27;

class QuadraticPrimes extends \Library\Timer {

	public static function primeCount($a, $b) {
		$primeCount = 0;
		for($i=0;;$i++) {
			$number = pow($i, 2) + ($a * $i) + $b;
			if($number > 0 && \Library\PrimeNumbers::isPrime($number)) {
				$primeCount++;
			} else{
				break;
			}
		}
		return $primeCount;
	}

	public function findMostPrimes() {
		$primes = array_values(\Library\PrimeNumbers::getPrimes(999));
		$primesCountBelowThousand = count($primes);
		$max = 0;
		$form = [];
		for($i=$primesCountBelowThousand-1; $i>1; $i--) {
			// b has to be prime
			$b = $primes[$i];
			if ($b < $max) {
				break;
			}
			// a has to be odd (except if b = 2 and we just ignore b = 2 here)
			for($a=999; $a>=-999; $a-=2) {
				$qp = self::primeCount($a, $b);
				if($qp > $max) {
					$max = $qp;
					$form['a'] = $a;
					$form['b'] = $b;
				}
			}
		}
		return array_product($form);
	}
}