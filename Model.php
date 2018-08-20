<?php
/**
* 
*/
class Model
{
	private $dbConnction;

	function __construct($dbConnction)
	{
		$this->dbConnction = $dbConnction->getConnection();
	}

	public function createUser($data) {
		try {
			$stmt = $this->dbConnction->prepare("Insert into users (name,email,phone_number) values(?,?,?)");
			$stmt->bind_param("ssi",$name, $email, $phone);
			$name = $data['name'];
			$email = $data['email'];
			$phone = $data['phone'];
			$stmt->execute();
		} catch (Exception $e) {
			die("DB error ". $e->getMessage());
		}
		return $this->dbConnction->insert_id;
	}

	public function getUserList() {
		try {
			$result = $this->dbConnction->query("select * from users");
			if($result->num_rows > 0) {
				return $result;
			} else {
				return false;
			}
		} catch (Exception $e) {
			die("DB error ". $e->getMessage());
		}
	}
}