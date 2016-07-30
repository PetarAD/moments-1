<form action="<?= site_url('/galleries/add') ?>" enctype="multipart/formmethod="post">
  <input type="text" name="name" placeholder="Име">
  <input type="file" name="img" >
  <input type="submit" name="submit" value="Създай">
</form>
<?php
foreach ($this->db->getalldata() as $row) {
  echo $row->name;
}
 ?>
 <img src="<?php echo site_url('img/'.$row->img)?>" />
