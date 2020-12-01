<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		echo 'Hello World.';
	}

	public function show($ID = null, $Name = null)
	{
		if ($ID == null && $Name == null) {echo 'Value is missing';}

		$this -> load -> model('User_model');
		$data = $this -> User_model -> getUsers();

		$this-> load-> view ('view_user', $data);
	}

	public function view($ID = null) {
		$this -> load -> model('User_model');

		if($ID == null) $data = $this->User_model->getNotes();
  		else $data = $this->User_model->getMessages($ID);

  		if(count($data) == 0) { echo 'No rows found'; return; }

  		$viewData = array('results' => $data);
  		$this->load->view('view_user', $viewData);

	}
}
