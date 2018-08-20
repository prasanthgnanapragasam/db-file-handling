<?php 

class Controller {
	
	private $model;
	private $fileHandler;

	public function __construct($model, $fileHandler) {
		$this->model = $model;
		$this->fileHandler = $fileHandler;
	}

	public function newreg() {
		$test = "TEST Variable";
		extract($test);
		include("View.php");
	}

	public function create() {
		$id = $this->model->createUser($_POST);
		if($id) {
			$content = $id." ".$_POST['name']. " ". $_POST['email']. " ". $_POST['phone']. PHP_EOL;
			$this->fileHandler->writeContentToFile($content);
		}
		echo $id;
		exit;
	}

	public function userlist() {
		$userList['data'] = $this->model->getUserList();
		extract($userList);
		include("file/userList.php");
		exit;
	}

	public function validateData($data) {
			$data['email'] = "pdsadsad@gmail.com";
			$data['url'] = "http://localhost/selfstudy/fatpipe/index.php?c=controller&m=validateData";
			$filters = ['email' => FILTER_VALIDATE_EMAIL, 
			'url' => FILTER_VALIDATE_URL];
			$valid = filter_var_array($data, $filters);
			print_r($valid);
			exit;
	}
}