<?php

class Category extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('categories');
  }
  public function index()
  {
    $this->template->set('title', 'Категории');
    $this->template->load('layouts/default', 'category');
  }

  public function show()
  {
    $category = $_POST['category'];
    $result = $this->categories->category('sport');
      $this->template->set('title', 'Категории');
      $this->template->load('layouts/default', 'category', ['result' => $result]);
  }
}
