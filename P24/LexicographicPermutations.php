<?php
namespace P24;
/**
 * Howto: we know there are n! \Library\Permutations for any given n
 * to get to the nth permutation we can use that to narrow it down from
 * first to last digit
 * (for example 100000: the last 9 digits can be ordered in 9! ways, meaning
 * the one millionst number has to have a 2 in front (as 0 as first means 0 -
 * 362880, 1 means 362880 - 725760, and 2 means 725760 - 1088640.
 */
require_once(dirname(dirname(__FILE__)) . '/Library/Factorial.php');
class LexicographicPermutations extends \Library\Timer {

	public function getNthPermutation($n, $maxDigit) {
		$permNumbers = range(0,$maxDigit);
		$m = $maxDigit+1;
		$permutation = '';
		$remaining = $n - 1;

		for ($i = 1; $i< $m; $i++) {
			// reorder index
			$permNumbers = array_values($permNumbers);
			$index = (int)($remaining /\Library\Factorial::getFactorials($m - $i));
			$remaining = $remaining %\Library\Factorial::getFactorials($m - $i);
			$permutation .= $permNumbers[$index];
			unset($permNumbers[$index]);
			if ($remaining == 0) {
				break;
			}
		}

		foreach($permNumbers as $lastDigit) {
			$permutation .= $lastDigit;
		}
		return $permutation;
	}
}