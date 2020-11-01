<?php
namespace P20;

class FactorialDigitSumTest extends \PHPUnit\Framework\TestCase {

	public function testGetSum() {
		$fds = new FactorialDigitSum();
		$n = 10;
		$ret = $fds->getSum($n);
		self::assertSame(27, $ret);
	}

	public function testGetSumReally() {
		$fds = new FactorialDigitSum();
		$n = 100;
		$ret = $fds->getSum($n);
		self::assertSame(648, $ret);
	}
}
