<?php
namespace P29;

class DistinctPowersTest extends \PHPUnit\Framework\TestCase {

	public function testGetCountOfDistinctTerms() {
		$min = 2;
		$max = 5;

		$dp = new DistinctPowers();
		$ret = $dp->getCountOfDistinctTerms($min, $max);
		self::assertSame(15, $ret);
	}

	public function testGetCountOfDistinctTermsEul() {
		$min = 2;
		$max = 100;

		$dp = new DistinctPowers();
		$ret = $dp->getCountOfDistinctTerms($min, $max);
		self::assertSame(9183, $ret);
	}
}
