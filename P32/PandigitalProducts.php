<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 08:04
 */

class PandigitalProducts {


    public function getPandigitalProduct()
    {
        $pandigitalProducts = [];
        for($i=2; $i<100; $i++) {
            if($i > 9) {
                $innerLoopLowerBound = 123;
            } else {
                $innerLoopLowerBound = 1234;
            }
            $innerLoopUpperBound = 10000 / $i;
            for ($j=$innerLoopLowerBound; $j <= $innerLoopUpperBound; $j++) {
                $product = $i*$j;
                $productDigits = $product . $i . $j;
                if (strlen($productDigits) === 9 && $this->isPandigital($productDigits)) {
                    $pandigitalProducts[$product] = $product;
                }
            }
        }
        return array_sum($pandigitalProducts);
    }

    private function isPandigital($productDigits)
    {
        for ($i = 1; $i <= 9; $i++) {
            if (strpos($productDigits, (string)$i) === false) {
                return false;
            }
        }
        return true;
    }
}