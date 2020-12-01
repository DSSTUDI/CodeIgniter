<?php
class User_model extends CI_Model {

	public function __construct() {
		$this -> load -> database();
	}

	public function getMessages($Username) {
		$sql = 'SELECT Messages.id, Messages.text, Messages.user_username, Users.email FROM Messages, Users WHERE user_username = ? AND Messages.user_username = Users.username';
		$query = $this -> db -> query($sql, array($Username));
		return $query -> result_array();
	}

	public function getUsers() {
		$data['ID'] = '1234';
		$data['Name'] = 'John';
		return $data;
	}
}
