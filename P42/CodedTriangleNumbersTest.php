<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 10:01
 */

require_once('CodedTriangleNumbers.php');
class CodedTriangleNumbersTest extends PHPUnit_Framework_TestCase {

    public function testGetCountOfTriangleNumbers()
    {
        $ctn = new CodedTriangleNumbers();
        $ret = $ctn->getCountOfTriangleNumbers();
        $this->assertSame(162, $ret);
    }
}
