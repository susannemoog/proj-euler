<?php
namespace P22;

class NameScoresTest extends \PHPUnit_Framework_TestCase {
	public function testGetNamesScoreSum() {
		$ns = new NameScores();
		$ret = $ns->getNamesScoreSum();
		$this->assertSame('871198282', $ret);
	}
}
