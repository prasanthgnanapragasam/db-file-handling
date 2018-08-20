<?php
include("Controller.php");
include("DB.php");
include("Model.php");
include("FileHandler.php");

class Container {

	private $instance;
	public $app;

	public static function getInstance() {
		if(empty($instance) || $instance == null) {
			$instance = new Container();
		}

		return $instance;
	}

	public function setup() {
		$app["DB"] = new DB();
		$app["Model"] = new Model($app["DB"]);
		$app["FileHandler"] = new FileHandler("/selfstudy/fatpipe/file/test.txt");
		$app["Controller"] = new Controller($app["Model"], $app["FileHandler"]);
		return $app;
	}
}