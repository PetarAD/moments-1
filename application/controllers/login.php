<?php

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $username = $_POST['username'];
    $password= $_POST['password'];
    $password = md5($password);
    $this->session->set_userdata($username,$password);
    redirect(base_url('/category'), 'refresh');
  }
}
//$_SESSION["username"]
//  $_SESSION["password"]
