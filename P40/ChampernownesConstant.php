<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 19:55
 */

class ChampernownesConstant {

    public function getValueForExpression()
    {
        $bases = [1,10,100,1000,10000,100000,1000000];
        $result = 1;
        $string = '';
        for($i=0; $i < 400000; $i++) {
            $string .= $i;
        }
        foreach ($bases as $base) {
            $result *= $string[$base];
        }
        return $result;
    }
}