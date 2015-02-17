<?hh
require_once(__DIR__ . '/../../Library/HH/PrimeNumbers.hh');
class FourDistinctPrimeFactors {

	private int $startTime;
	private ?int $endTime;

	public function __construct() {
		$this->startTime = microtime(true);
	}

    public function getConsecutiveWithFourDistinctFactors()
    {
        $lowerBound = 2 * 3 * 5 * 7;
        $tempArr = [];
        $primes = \PrimeNumbers::findPrimes(10000);
        for($i = $lowerBound; ; $i++) {
            $factors = \PrimeNumbers::findPrimeFactorCountWithGivenPrimes($i, $primes);
            if($factors == 4 ) {
                $tempArr[] = $i;
            } else {
                $tempArr = [];
            }
            if(count($tempArr) == 4) {
                return $tempArr[0];
            }
        }
    }

    public function __destruct() {
    	$endTime = microtime(true) - $this->startTime;
    	echo $endTime;
    }
}