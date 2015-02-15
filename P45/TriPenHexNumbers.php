<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 15.02.2015
 * Time: 18:50
 */

class TriPenHexNumbers {

    public function getNumberThatHasItAll()
    {
        for($i=144;;$i++) {
            $hex = $i * (2 * $i - 1);
            if ($this->isPentagonal($hex)) {
                return $hex;
            }
        }
        return false;
    }

    private function isPentagonal($hex)
    {
        $n = (sqrt(24 * $hex + 1) + 1) / 6;
        return ($n == round($n));
    }
}