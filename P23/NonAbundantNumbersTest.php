<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 09:00
 */

require_once('NonAbundantNumbers.php');
class NonAbundantNumbersTest extends PHPUnit_Framework_TestCase {

	public function testGetSumOfNonAbundantNumbers() {
		$nan = new NonAbundantNumbers();
		$ret = $nan->getSum();
		$this->assertSame(4179871, $ret);
	}
}
