<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 10.02.15
 * Time: 07:34
 */

require_once('NameScores.php');
class NameScoresTest extends PHPUnit_Framework_TestCase {
	public function testGetNamesScoreSum() {
		$ns = new NameScores();
		$ret = $ns->getNamesScoreSum();
		$this->assertSame('871198282', $ret);
	}
}
