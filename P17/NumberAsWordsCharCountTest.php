<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 15:04
 */

require_once('NumberAsWordsCharCount.php');
class NumberAsWordsCharCountTest extends PHPUnit_Framework_TestCase {


	public function testGetNumberAsWordsCharCount() {
		$nwcc = new NumberAsWordsCharCount();
		$ret = $nwcc->getNumberAsWordsCharCount(1000);
		$this->assertSame(19, $ret);
	}
}
