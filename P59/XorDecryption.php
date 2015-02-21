<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 11:09
 */

namespace P59;


class XorDecryption {

    // this function is just for fun to read the text
    public function decrypt($string)
    {
        $chars = explode(',', $string);
        $charCnt = count($chars);
        $piles = [[],[],[]];
        $piler = 0;
        for($i=0; $i<$charCnt; $i++) {
            $piles[$piler]['count'][$chars[$i]] = isset($piles[$piler]['count'][$chars[$i]]) ? $piles[$piler]['count'][$chars[$i]] + 1 : 1;
            $piles[$piler]['text'][] = $chars[$i];
            if($piler == 2) {
                $piler = 0;
            } else {
                $piler++;
            }
        }
        foreach($piles as $key => &$pile) {
            $mostUsedChar = array_search(max($pile['count']), $pile['count']);
            $keyForPile = $mostUsedChar ^ 32;
            array_walk($pile['text'], function(&$val) use ($keyForPile) {
                $val = chr($val ^ $keyForPile);
            });
            $piles[$key]['text'] = $pile['text'];
        }
        $cnt = count($piles[2]['text']);
        $text = '';
        for($i=0; $i<$cnt; $i++) {
            $text .= $piles[0]['text'][$i];
            $text .= $piles[1]['text'][$i];
            $text .= $piles[2]['text'][$i];
        }
        return $text;
    }

    public function decryptedSum($string)
    {
        $chars = explode(',', $string);
        $charCnt = count($chars);
        $piles = [[],[],[]];
        $piler = 0;
        for($i=0; $i<$charCnt; $i++) {
            $piles[$piler]['count'][$chars[$i]] = isset($piles[$piler]['count'][$chars[$i]]) ? $piles[$piler]['count'][$chars[$i]] + 1 : 1;
            $piles[$piler]['text'][] = $chars[$i];
            if($piler == 2) {
                $piler = 0;
            } else {
                $piler++;
            }
        }
        $asciiSum = 0;
        foreach($piles as $pile) {
            $mostUsedChar = array_search(max($pile['count']), $pile['count']);
            $keyForPile = $mostUsedChar ^ 32;
            array_walk($pile['text'], function(&$val) use ($keyForPile, &$asciiSum) {
                $asciiSum += $val ^ $keyForPile;
            });
        }
        return $asciiSum;
    }
}