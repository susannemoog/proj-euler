<?php
/**
 * Created by PhpStorm.
 * User: susanne
 * Date: 09.02.15
 * Time: 15:04
 */

class NumberAsWordsCharCount {

	public static function getNumberAsWordsCharCount($max) {
		$fm = new NumberFormatter("en_GB", NumberFormatter::SPELLOUT);
		$out = '';
		for($i=1;$i<=$max; $i++) {
			$out .= $fm->format($i);
			if($i>100 && ($i%100)) {
				$out .= 'and';
			}
		}
		$out = str_replace(' ', '', $out);
		$out = str_replace('-', '', $out);
		echo strlen($out);
	}
}
