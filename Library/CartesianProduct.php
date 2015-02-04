<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 04.02.15
 * Time: 12:53
 */

class CartesianProduct {

	public static function calculate($arr1, $arr2) {
		$results = [];
		for($i=0; $i<count($arr1); $i++) {
			for($j=0; $j<count($arr2); $j++) {
				$product = $arr1[$i]*$arr2[$j];
				$results[$product] = $product;
			}
		}
		return $results;
	}
}