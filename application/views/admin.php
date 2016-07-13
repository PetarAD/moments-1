<p>
  <?php foreach ($result as $key => $value): ?>
    <h2><?= $result[$key]->name ?></h2>
    <p><?= $result[$key]->description ?></p>
  <?php endforeach; ?>
</p>
