<?php

class FileHandler {

	private $filepath;
	private $fileIns;

	public function __construct($path) {
		$this->filePath = $path;

		if(file_exists($this->filePath)) {
			$this->fileIns = fopen($this->filePath, 'a') or die('Cannot open file:  '.$this->filePath);
		} else {
			$this->fileIns = fopen($this->filePath, 'w') or die('Cannot open file:  '.$this->filePath);
		}
	}

	public function writeContentToFile($content) {
		fwrite($this->fileIns, $content);
	}
}