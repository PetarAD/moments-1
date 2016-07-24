<?php

class Category extends CI_Model
{
  public function index() {
    $sql =  $this->db->get('categories');
    return $sql->result();
  }
}
