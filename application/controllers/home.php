<?php
class Home extends CI_Controller
{
  public function index()
  {
    $this->template->set('title', 'Начало');
    $this->template->load('layouts/default', 'home');
  }
}
