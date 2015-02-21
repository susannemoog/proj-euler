<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 09:36
 */

namespace P57;


class SquareRootConvergence {

    public function getFractionWithBiggerNumerator()
    {
        $n = 1000;
        $nom = 3;
        $denom = 2;
        $counter = 0;
        for($i=2; $i<$n; $i++) {
            $newDenom = bcadd($nom, $denom);
            $nom = bcadd($denom, $newDenom);
            $denom = $newDenom;
            if(strlen($nom) > strlen($denom)) {
                $counter++;
            }
        }
        return $counter;
    }
}