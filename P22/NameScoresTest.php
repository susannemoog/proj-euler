<?php
namespace P22;

class NameScoresTest extends \PHPUnit\Framework\TestCase {
	public function testGetNamesScoreSum() {
		$ns = new NameScores();
		$ret = $ns->getNamesScoreSum();
		self::assertSame('871198282', $ret);
	}
}
