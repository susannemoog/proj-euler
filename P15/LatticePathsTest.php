<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 14:22
 */

require_once('LatticePaths.php');
class LatticePathsTest extends PHPUnit_Framework_TestCase {

	public function testGetPaths() {
		$lp = new LatticePaths();
		$ret = $lp->getPaths(20,20);
		$this->assertSame(6, $ret);
	}
}
