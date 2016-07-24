<?php if (isset($search)): ?>
  <?php foreach ($search as $key => $value): ?>
    <h2><i class="fa fa-calendar" aria-hidden="true"></i> <?= $search[$key]->name ?></h2>
    <p><?= $search[$key]->description ?></p>
  <?php endforeach; ?>
<?php else: ?>
<p>
  Няма открит резултат.
</p>
<?php endif; ?>
