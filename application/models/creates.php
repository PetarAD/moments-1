<?php
/**
 *
 */
class Creates extends CI_Model
{
  function add($description, $name)
  {
    $publish=date('y-m-d');
    $this->db->query("INSERT INTO `moment`( `category`, `description`,`name`,`published`) VALUES ('category','$description','$name', '$publish')");
    return true;
  }
}
