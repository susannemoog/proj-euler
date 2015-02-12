<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 12.02.15
 * Time: 09:33
 */
require_once('DistinctPowers.php');
class DistinctPowersTest extends PHPUnit_Framework_TestCase {

	public function testGetCountOfDistinctTerms() {
		$min = 2;
		$max = 5;

		$dp = new DistinctPowers();
		$ret = $dp->getCountOfDistinctTerms($min, $max);
		$this->assertSame(15, $ret);
	}

	public function testGetCountOfDistinctTermsEul() {
		$min = 2;
		$max = 100;

		$dp = new DistinctPowers();
		$ret = $dp->getCountOfDistinctTerms($min, $max);
		$this->assertSame(9183, $ret);
	}
}
