<p>
  <?php foreach ($result as $key => $value): ?>
    <h2><i class="fa fa-calendar" aria-hidden="true"></i> <?= $result[$key]->name ?></h2>
    <p><?= $result[$key]->description ?></p>
  <?php endforeach; ?>
</p>
