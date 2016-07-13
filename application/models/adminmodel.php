<?php
/**
 *
 */
class adminmodel extends CI_Model
{

  function show()
  {
    $result = $this->db->query("SELECT * FROM `moment`");
    return $result->result();
  }
}
