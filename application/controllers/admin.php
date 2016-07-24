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

  public function show($id) {
    $this->load->model('adminmodel');
    $result = $this->adminmodel->showMore($id);
    if (!$result) {
      $this->template->set('title', 'Контролен панел');
      return $this->template->load('layouts/default', 'admin-show');
    }
    $this->template->set('title', 'Контролен панел');
      $this->template->load('layouts/default', 'admin-show', compact('result'));
  }
}
