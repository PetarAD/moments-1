<?php

class Create extends CI_Controller
{
  public function index()
  {
    $this->load->model('category');
    $category = $this->category->index();
    $this->template->set('title', 'Сподели преживяване');
    $this->template->load('layouts/default', 'create', compact('category'));
  }

  public function add()
  {
    $name=$_POST['name'];
    $description=$_POST['description'];
    $publish=date('y-m-d');
    $category = $_POST['category'];
   $this->load->model('creates');
   $this->creates->add($category, $description, $name);
   self::index();
  }

}
