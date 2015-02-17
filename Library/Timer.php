<?php
namespace Library;

class Timer {

	public function __construct() {
		$this->startTime = microtime(true);
	}

	public function __destruct() {
		$endTime = microtime(true) - $this->startTime;
		//echo __DIR__ . '/../README.md';
		$fh = fopen(__DIR__ . '/../README.md', 'a+');
		fwrite($fh, '| ' . str_replace('\\', ' ', get_class($this)) . ' | Time: ' . round($endTime, 3) * 1000 . ' ms |' . "\r\n");
		fclose($fh);
	}
}