<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 06:58
 */

require_once('FactorialDigitSum.php');
class FactorialDigitSumTest extends PHPUnit_Framework_TestCase {

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
