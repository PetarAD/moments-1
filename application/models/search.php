<?php


class Search extends CI_Model
{
  public function index($name) {
    $this->db->like('name', $name);
        $query  =   $this->db->get('moment');
        return $query->result();
  }
}
