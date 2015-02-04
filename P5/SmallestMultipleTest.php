<?php
/**
 * 2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
 *
 * What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
 */

require_once('SmallestMultiple.php');

class SmallestMultipleTest extends PHPUnit_Framework_TestCase {

	public function testGetSmallestMultiple() {
		$sm = new SmallestMultiple();
		$ret = $sm->getSmallestMultiple(10);
		$this->assertSame(2520, $ret);
	}

}
