<?php
namespace P17;

class NumberAsWordsCharCountTest extends \PHPUnit_Framework_TestCase {


	public function testGetNumberAsWordsCharCount() {
		$nwcc = new NumberAsWordsCharCount();
		$ret = $nwcc->getNumberAsWordsCharCount(1000);
		$this->assertSame(21124, $ret);
	}
}
