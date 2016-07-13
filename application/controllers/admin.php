<?php

class Admin extends CI_Controller
{
  public function index()
  {
    $this->template->set('title', 'Контролен панел');
    $this->template->load('layouts/default', 'admin');
  }
}
