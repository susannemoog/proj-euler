<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 18:50
 */

require_once('TriPenHexNumbers.php');
class TriPenHexNumbersTest extends PHPUnit_Framework_TestCase {

    public function testGetNumberThatHasItAll()
    {
        $tphn = new TriPenHexNumbers();
        $ret = $tphn->getNumberThatHasItAll();
        $this->assertSame(1533776805, $ret);
    }
}
