<?php

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    session_unset();
    session_destroy();
    $username = $_POST['username'];
    $password= $_POST['password'];
    $password = md5($password);
    $this->session->set_userdata([
      'username' => $username
    ]);
    redirect('/create', 'refresh');
  }
}
