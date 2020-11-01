<?php
namespace Library;

/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 14.02.2015
 * Time: 15:06
 */

class Permutations {
    public static function permutate($items, $permutations = array( )) {
        if (empty($items)) {
            $return = array($permutations);
        }  else {
            $return = array();
            for ($i = count($items) - 1; $i >= 0; --$i) {
                $newItems = $items;
                $newPermutations = $permutations;
                list($foo) = array_splice($newItems, $i, 1);
                array_unshift($newPermutations, $foo);
                $return = array_merge($return, self::permutate($newItems, $newPermutations));
            }
        }
        return $return;
    }

    public static function permutateCyclomatic($items)
    {
        $return = array();
        for ($i = count($items) - 1; $i >= 0; --$i) {
            $newItems = $items;
            $newItems[] = array_shift($newItems);
            $return[] = $items = $newItems;
        }

        return $return;
    }

    public static function isPermutation($a, $b) {
        $aArr = (str_split($a));
        $bArr = (str_split($b));
        sort($aArr);
        sort($bArr);
        if($aArr == $bArr) {
            return true;
        }

        return false;
    }
}
