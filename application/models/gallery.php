<?php
class Gallery extends CI_Model
{
  function add( $name,$img)
  {
    $img = file_get_contents($img);
    $this->db->query("INSERT INTO `img`( `name`, `img`) VALUES (?, ?)", [$name, $img]);
    return true;
  }
}
?>
