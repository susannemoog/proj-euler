<?php
/**
 * The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
 *
 * Find the sum of all the primes below two million.
 */

require_once('SumOfPrimes.php');
class SumOfPrimesTest extends PHPUnit_Framework_TestCase {

	public function testGetSumOfPrimes() {
		$sop = new SumOfPrimes();
		$ret = $sop->getSumOfPrimes(10);
		$this->assertSame(17, $ret);
	}
}
