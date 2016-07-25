<?php

class Draw extends CI_Controller
{
  public function index()
  {
    $this->template->set('title', 'Сподели преживяване');
    $this->template->load('layouts/default', 'draw');
  }
}
?>
