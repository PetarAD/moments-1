<?php if (isset($result)): ?>
<p>
  <?php foreach ($result as $key => $value): ?>
    <h2><i class="fa fa-calendar" aria-hidden="true"></i> <?= $result[$key]->name ?></a></h2>
    <p><?= $result[$key]->description ?></p>
  <?php endforeach; ?>
</p>
<?php else: ?>
<p>Няма такъв запис.</p>
<?php endif; ?>
