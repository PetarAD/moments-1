<p>
  <?php foreach ($result as $key => $value): ?>
    <h2><i class="fa fa-calendar" aria-hidden="true"></i>
      <a href="<?= site_url('admin/show/'.$result[$key]->id) ?>"><?= $result[$key]->name ?></a></h2>
    <p><?= $result[$key]->description ?></p>
  <?php endforeach; ?>
</p>
