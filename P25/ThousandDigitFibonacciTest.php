<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 11.02.15
 * Time: 06:50
 */

require_once('ThousandDigitFibonacci.php');
class ThousandDigitFibonacciTest extends PHPUnit_Framework_TestCase {

	public function testGetThousandDigitFibonacci() {
		$tdf = new ThousandDigitFibonacci();
		$ret = $tdf->getThousandDigitFibonacci();
		$this->assertSame(4782, $ret);
	}
}
