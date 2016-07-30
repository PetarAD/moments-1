<?php

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $username = trim($_POST['username']);
    $password= trim($_POST['password']);
    $password = sha1($password);
    $_SESSION['username'] = $username;
    redirect('/create', 'refresh');
  }
}
