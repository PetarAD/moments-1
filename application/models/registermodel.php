<?php

class registermodel extends CI_Model
{
  public function index ($username, $password, $email, $firstName, $lastName)
  {
    $query = $this->db->query("INSERT INTO `user`(`username`,
    `password`, `email`, `first_name`, `last_name`)
    VALUES (?, ?, ?, ?, ?)", [$username, $password, $email, $firstName, $lastName]);
    return true;
  }
}
