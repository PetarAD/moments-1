<?php

class Galleries extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('gallery');
  }
  public function index()
  {
    $this->template->set('title', 'Категории');
    $this->template->load('layouts/default', 'gallery');
  }
  public function add()
  {
    $name = trim($_POST['name']);
    $img = trim($_POST['img']);
   $this->load->model('gallery');
   $this->gallery->add( $name,$img);
   redirect('/galleries/show', 'refresh');
  }
  public function show(){
       $this->load->model('gallery');
    $result = $this->gallery->getalldata();
    $this->template->set('title', 'Категории');
    $this->template->load('layouts/default', 'gallery-show', compact('result'));
  }
}
/*  public function show(){
       $this->load
       header("Content-type: image/jpeg");
       echo $result['image'];
}*/
/*
  public function show()
  {
    $category = $_POST['category'];
    $result = $this->categories->category('sport');
      $this->template->set('title', 'Категории');
      $this->template->load('layouts/default', 'category', ['result' => $result]);
  }
  */
?>
