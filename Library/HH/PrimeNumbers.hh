<?hh

class PrimeNumbers {

    public static function findPrimeFactorCountWithGivenPrimes(int $number, Set $primes) : int {
        $primeFactors = array();
        foreach($primes as $prime) {
            while($number % $prime == 0) {
                $primeFactors[$prime] = true;
                $number = (int)($number / $prime);
            }
        }
        return count($primeFactors);
    }

    // from cake
    public static function findPrimes(int $limit = 100) : Set {
        $sqrt = sqrt($limit);
        $primes = Set {};
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

}