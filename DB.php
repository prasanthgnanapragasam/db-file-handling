<?php

class DB {

	private $con;

	public function getConnection() {
		$this->con = new mysqli("localhost","root","mysql","test_db");

		if($this->con->connect_error) {
			die("Connection failed");
		}

		return $this->con;
	}

	public function __destruct() {
		$this->con->close();
	}
}