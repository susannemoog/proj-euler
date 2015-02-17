<?php
namespace P15;

class LatticePathsTest extends \PHPUnit_Framework_TestCase {

	public function testGetPaths() {
		$lp = new LatticePaths();
		$ret = $lp->getPaths(20,20);
		$this->assertSame(137846528820, round($ret));
	}
}
