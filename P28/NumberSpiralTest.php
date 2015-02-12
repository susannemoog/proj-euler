<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 07:37
 */

require_once('NumberSpiral.php');
class NumberSpiralTest extends PHPUnit_Framework_TestCase {

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
		$this->assertSame(101, $ret);
	}
}
