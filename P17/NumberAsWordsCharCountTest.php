<?php
namespace P17;

class NumberAsWordsCharCountTest extends \PHPUnit\Framework\TestCase {


	public function testGetNumberAsWordsCharCount() {
		$nwcc = new NumberAsWordsCharCount();
		$ret = $nwcc->getNumberAsWordsCharCount(1000);
		self::assertSame(21124, $ret);
	}
}
