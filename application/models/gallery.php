<?php
class Gallery extends CI_Model
{
  function add( $name,$img)
  {
<<<<<<< HEAD
    $img = file_get_contents($img);
    $this->db->query("INSERT INTO `img`( `name`, `img`) VALUES (?, ?)", [$name, $img]);
=======
    $img = file_get_contents($img['fill_path']);
    $this->db->query("INSERT INTO `img`( `name`, `img`) VALUES ( ?, ?)", [$name, $img]);
>>>>>>> 1256068e7577dc648a2bc535f15bc4b89ef01ec2
    return true;
  }
  public function getalldata(){
        $q=$this->db->get('img');
        return $q->result();
  }

}
?>
