<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 14:22
 */

require_once('../Library/Factorial.php');
class LatticePaths {


	public function getPaths($gridWidth, $gridHeight) {
		$n = $gridWidth + $gridHeight;
		$k = $gridHeight;
		return (Factorial::getFactorials($n)) / ((Factorial::getFactorials($n - $k)) * (Factorial::getFactorials($k)));
	}
}