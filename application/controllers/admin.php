<?php

class Admin extends CI_Controller
{
  public function index()
  {
    $this->load->model('adminmodel');
    $result = $this->adminmodel->show();
    $this->template->set('title', 'Контролен панел');
    $this->template->load('layouts/default', 'admin', compact('result'));
  }
}
