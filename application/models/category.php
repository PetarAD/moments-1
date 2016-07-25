<?php

class Category extends CI_Model
{
  public function index() {
    $sql =  $this->db->get('categories');
    return $sql->result();
  }

  public function sort($id) {
    $sql =  $this->db->query("SELECT categories.category_name, moment.id, moment.name FROM categories INNER JOIN moment ON categories.category_id = moment.category WHERE categories.category_id = ?", [$id]);
    return $sql->result();
  }
}
