<?php
namespace P28;

class NumberSpiralTest extends \PHPUnit_Framework_TestCase {

	public function testGetNumberSpiral() {
		$ns = new NumberSpiral();
		$n = 5;
		$ret = $ns->getSpiralSum($n);
		$this->assertSame(101, $ret);
	}

	public function testGetNumberSpiralEul() {
		$ns = new NumberSpiral();
		$n = 1001;
		$ret = $ns->getSpiralSum($n);
		$this->assertSame(669171001, $ret);
	}
}
