<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 14:55
 */

require_once('SumOfPowDigits.php');
class SumOfPowDigitsTest extends PHPUnit_Framework_TestCase {

	public function testGetSumOfPow() {
		$sopd = new SumOfPowDigits();
		$ret = $sopd->getSumOfPow(1000);
		$this->assertSame(26, $ret);
	}
}
