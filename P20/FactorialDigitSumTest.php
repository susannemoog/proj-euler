<?php
namespace P20;

class FactorialDigitSumTest extends \PHPUnit_Framework_TestCase {

	public function testGetSum() {
		$fds = new FactorialDigitSum();
		$n = 10;
		$ret = $fds->getSum($n);
		$this->assertSame(27, $ret);
	}

	public function testGetSumReally() {
		$fds = new FactorialDigitSum();
		$n = 100;
		$ret = $fds->getSum($n);
		$this->assertSame(648, $ret);
	}
}
