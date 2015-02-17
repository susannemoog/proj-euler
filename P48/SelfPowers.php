<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 17.02.2015
 * Time: 18:39
 */

namespace P48;


class SelfPowers {


    public function getLastNDigits($n)
    {
        $result = 0;
        $modulo = 1 . str_repeat('0', $n);

        for ($i = 1; $i <= 1000; $i++) {
            $number = $i;
            for ($j = 1; $j < $i; $j++) {
                $number = bcmul($number, $i);
                $number = bcmod($number, $modulo);
            }

            $result = bcadd($result, $number);
            // get last ten
            $result = bcmod($result, $modulo);
        }
        return $result;
    }
}