<?php

class Register extends CI_Controller
{
	
	
	public function index()
  {		
		$username = trim($_POST['username']);
		$password = trim(sha1($_POST['password']));
		$email = trim($_POST['email']);
		$firstName = trim($_POST['name']);
		$lastName=  trim($_POST['last-name']);
    $this->load->model('registermodel');
    return $this->registermodel->index($username, $password, $email, $firstName, $lastName);
  }
}


