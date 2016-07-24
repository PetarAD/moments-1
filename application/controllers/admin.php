<?php

class Admin extends CI_Controller
{
  public function index()
  {
    $this->load->model('adminmodel');
    $this->load->model('category');
    $category = $this->category->index();
    $result = $this->adminmodel->show();
    $this->template->set('title', 'Контролен панел');
    $this->template->load('layouts/default', 'admin', compact('result', 'category'));
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

  public function sort() {
    $this->load->model('category');
    $id = $_POST['category'];
    $sort = $this->category->sort($id);
    $this->template->set('title', 'Контролен панел');
    $this->template->load('layouts/default', 'admin', compact('sort'));
  }

  public function search() {
    $name =  $_POST['name'];
    $this->load->model('search');
    $search = $this->search->index($name);
    if ($search) {
      $this->template->set('title', 'Контролен панел');
      $this->template->load('layouts/default', 'admin-search', compact('search'));
    } else {
      $this->template->set('title', 'Контролен панел');
      $this->template->load('layouts/default', 'admin-search');
    }
  }
}
