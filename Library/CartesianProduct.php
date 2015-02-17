<?php
namespace Library;

class CartesianProduct {

	public static function calculate($arr1, $arr2) {
		$results = [];
		$c1 = count($arr1);
		$c2 = count($arr2);
		for($i=0; $i<$c1; $i++) {
			for($j=0; $j<$c2; $j++) {
				$product = $arr1[$i]*$arr2[$j];
				$results[$product] = $product;
			}
		}
		return $results;
	}
}