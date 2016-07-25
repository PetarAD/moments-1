<form action="<?= site_url('admin/search/')?>" method="post">
  <fieldset>
    <input type="text" name="name">
    <input type="submit" value="Търси">
  </fieldset>
</form>
<?php if (empty($sort)): ?>

  <form action="<?= site_url('/admin/sort/') ?>" method="post">
    <fieldset>
      <label for="category">Изберете категория:</label>
      <select name="category">
        <?php foreach ($category as $key => $value): ?>
          <option value="<?= $category[$key]->category_id ?>">
            <?= $category[$key]->category_name?>
          </option>
        <?php endforeach; ?>
      </select>
    </fieldset>
    <fieldset>
      <input type="submit" value="Филтрирай">
    </fieldset>
  </form>
<?php endif; ?>
<p>
  <?php if (isset($sort)): ?>
    <?php foreach ($sort as $key => $value): ?>
      <h2><i class="fa fa-calendar" aria-hidden="true"></i>
        <a href="<?= site_url('admin/show/'.$sort[$key]->id) ?>"> <?= $sort[$key]->name ?></a></h2>
    <?php endforeach; ?>
  <?php else: ?>
  <?php foreach ($result as $key => $value): ?>
    <h2><i class="fa fa-calendar" aria-hidden="true"></i>
      <a href="<?= site_url('admin/show/'.$result[$key]->id) ?>"><?= $result[$key]->name ?></a></h2>
      <i>Категория: <?= $result[$key]->category_name ?></i>
    <p><?= $result[$key]->description ?></p>
  <?php endforeach; ?>
<?php endif; ?>
</p>
