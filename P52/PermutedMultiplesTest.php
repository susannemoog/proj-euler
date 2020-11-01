<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 20.02.15
 * Time: 06:53
 */
namespace P52;

class PermutedMultiplesTest extends \PHPUnit\Framework\TestCase {

	public function testGetSmallestPermutedMultipleOfMax6() {
		$pm = new PermutedMultiples();
		$ret = $pm->getSmallestPermutedMultipleOfMax6();
		self::assertSame(142857, $ret);
	}
}
