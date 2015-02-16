<?php

class PrimeNumbers {

	public static $primes = [];

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

	public static function findPrimeFactorsWithDuplicates($number) {
		$primeFactors = array();
		for($i = 2; $i <= $number; $i++) {
			if(empty(self::$primes[$i])) {
				if(self::isPrime($i)) {
					self::$primes[] = $i;
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

    public static function findPrimeFactorCountWithGivenPrimes($number, $primes = []) {
        $primeFactors = array();
        $primeCount = count($primes);
        for($i = 0; $i < $primeCount; $i++) {

            while($number % $primes[$i] == 0) {
                $primeFactors[$primes[$i]] = $i;
                $number = $number / $primes[$i];
            }
        }
        return count($primeFactors);
    }

    // from cake
    public static function findPrimes($limit = 100) {
        $sqrt = sqrt($limit);
        $isPrime = array_fill(0, $limit + 1, false);
        for ($i = 1; $i <= $sqrt; $i++) {
            for ($j = 1; $j <= $sqrt; $j++) {
                $n = 4 * pow($i, 2) + pow($j, 2);
                if ($n <= $limit && ($n % 12 == 1 || $n % 12 == 5)) {
                    $isPrime[$n] ^= true;
                }
                $n = 3 * pow($i, 2) + pow($j, 2);
                if ($n <= $limit && $n % 12 == 7) {
                    $isPrime[$n] ^= true;
                }
                $n = 3 * pow($i, 2) - pow($j, 2);
                if ($i > $j && $n <= $limit && $n % 12 == 11) {
                    $isPrime[$n] ^= true;
                }
            }
        }
        for ($n = 5; $n <= $sqrt; $n++) {
            if ($isPrime[$n]) {
                $s = pow($n, 2);
                for ($k = $s; $k <= $limit; $k += $s) {
                    $isPrime[$k] = false;
                }
            }
        }
        $primes[] = 2;
        $primes[] = 3;
        for ($i = 0; $i < $limit; $i++) {
            if ($isPrime[$i]) {
                $primes[] = $i;
            }
        }
        return $primes;
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