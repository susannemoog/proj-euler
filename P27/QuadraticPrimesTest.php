<?php
namespace P27;

class QuadraticPrimesTest extends \PHPUnit_Framework_TestCase {

	public function testPrimeCountForFormula() {
		$qp = new QuadraticPrimes();
		$a = -79;
		$b = 1601;
		// n² − 79n + 1601
		$ret = $qp->primeCount($a, $b);
		$this->assertSame(80, $ret);
	}

	public function testFindMostPrimes(){
		$qp = new QuadraticPrimes();
		$ret = $qp->findMostPrimes();
		$this->assertSame(-59231, $ret);
	}

}
