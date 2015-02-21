<?php
/**
 * Created by PhpStorm.
 * User: Susanne
 * Date: 21.02.2015
 * Time: 08:30
 */

namespace P55;


use Library\Palindrome;

class LychrelNumbers {

    
    public function isLychrelNumber($input)
    {
        for($i=0;$i<50;$i++) {
            $input = bcadd($input, strrev($input));
            if(Palindrome::isPalindrome($input)){
                return false;
            }
        }
        return true;

    }

    public function getLychrelNumberCount($n)
    {
        $lychrelCounter = 0;
        for($i=0; $i<$n; $i++) {
            if($this->isLychrelNumber($i)) {
                $lychrelCounter++;
            }
        }
        return $lychrelCounter;
    }
}