<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 19:42
 */

require_once('IntegerRightTriangles.php');
class IntegerRightTrianglesTest extends PHPUnit_Framework_TestCase {

    public function testGetMostTrianglesPerPerimeter()
    {
        $irt = new IntegerRightTriangles();
        $ret = $irt->getMostTrianglesPerPerimeter();
        $this->assertSame(840, $ret);
    }
}
