<?php

class Create extends CI_Controller
{
  public function index()
  {
    $this->template->set('title', 'Сподели преживяване');
    $this->template->load('layouts/default', 'create');
  }

  public function add()
  {
    $name=$_POST['name'];
    $description=$_POST['description'];
    $publish=date('y-m-d');
   $this->load->model('creates');
   $this->creates->add($description, $name);
   self::index();
  }

}
