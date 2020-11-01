<?php
namespace P15;

class LatticePathsTest extends \PHPUnit\Framework\TestCase {

	public function testGetPaths() {
		$lp = new LatticePaths();
		$ret = $lp->getPaths(20,20);
		self::assertSame((float)137846528820, round($ret));
	}
}
