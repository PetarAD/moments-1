<form action="<?= site_url('/galleries/add') ?>">
  <input type="text" name="name" placeholder="Име">
  <input type="file" name="img" >
  <input type="submit" name="submit" value="Създай">
</form>
<pre>
<?php foreach ($result as $key=> $value): ?>
  <img src="data:image/jpeg;base64,<?= base64_encode($result[$key]->img) ?>" />
<?php endforeach; ?>
