<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 05.02.15
 * Time: 08:27
 */

require_once('../Library/PrimeNumbers.php');
class DivisableTriangleNumber {

	public function triangleWithXDivisors($divisorCount) {
		$add = 1;
		$triangle = 0;
		$pn = new PrimeNumbers();
		for($i=1;;$i++) {
			$triangle += $i*$add;
			$primeFactors = $pn->findPrimeFactorsWithDuplicates($triangle);
			$divisors = 1;
			foreach($primeFactors as $all) {
				$factorPower = count($all);
				$divisors *= $factorPower+1;
			}

			if($divisors >= $divisorCount) {
				break;
			}
		}
		return $triangle;
	}
}