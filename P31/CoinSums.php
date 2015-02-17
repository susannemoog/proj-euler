<?php
namespace P31;
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 12.02.2015
 * Time: 19:32
 */

class CoinSums extends \Library\Timer {

    public function getCoinSumWaysForN($n)
    {
        $coins = [1,2,5,10,20,50,100,200];
        $coinsCnt = count($coins);
        $ways[0] = 1;
        for($k=1; $k<=$n; $k++) {
            $ways[$k] = 0;
        }
        for($i=0; $i < $coinsCnt; $i++) {
            for($j=$coins[$i]; $j<=$n; $j++) {
                $ways[$j] += $ways[$j - $coins[$i]];
            }
        }
        return $ways[$n];
    }
}