<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 11:53
 */

require_once('DigitFifthPowers.php');
class DigitFifthPowersTest extends PHPUnit_Framework_TestCase {

	public function testGetSumOfFifthPowerDigitNumbers() {
		$dfp = new DigitFifthPowers();
		$ret = $dfp->getSumOfFifthPowerDigitNumbers();
		$this->assertSame(19316, $ret);
	}
}
