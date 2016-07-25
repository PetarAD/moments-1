<?php
/**
 *
 */
class adminmodel extends CI_Model
{

  function showMore ($id) {
    $result = $this->db->query("SELECT * FROM `moment` WHERE `id`=?", [$id]);
    return $result->result();
  }
  function show()
  {
    $result = $this->db->query("SELECT * FROM `moment` JOIN `categories` ON moment.category = categories.category_id");
    return $result->result();
  }
}
