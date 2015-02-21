<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 08:30
 */

namespace P55;


class LychrelNumbersTest extends \PHPUnit_Framework_TestCase {


    public function lychrelNumberDataProvider()
    {
        return [
            '47'  => [47, false],
            '349' => [349, false],
            '196' => [196, true],
        ];
    }

    /**
     * @dataProvider lychrelNumberDataProvider
     * @test
     */
    public function testIsLychrelNumber($input, $expected)
    {
        $ln = new LychrelNumbers();
        $ret = $ln->isLychrelNumber($input);
        $this->assertSame($expected, $ret);
    }

    public function testLychrelNumberCount() {
        $ln = new LychrelNumbers();
        $n = 10000;
        $ret = $ln->getLychrelNumberCount($n);
        $this->assertSame(249, $ret);
    }
}
