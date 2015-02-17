<?php
namespace P17;

class NumberAsWordsCharCount extends \Library\Timer {

	public static function getNumberAsWordsCharCount($max) {
		$fm = new \NumberFormatter("en_GB", \NumberFormatter::SPELLOUT);
		$out = '';
		for($i=1;$i<=$max; $i++) {
			$out .= $fm->format($i);
			if($i>100 && ($i%100)) {
				$out .= 'and';
			}
		}
		$out = str_replace(' ', '', $out);
		$out = str_replace('-', '', $out);
		return strlen($out);
	}
}
