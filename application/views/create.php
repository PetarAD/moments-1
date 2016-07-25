<form  action="<?= site_url('/create/add') ?>" method="POST">
  <fieldset>
    <label for="name">Име на момента</label>
    <input type="text" name="name">
  </fieldset>
  <fieldset>
    <select name="category">
      <?php foreach ($category as $key => $value): ?>
        <option value="<?= $category[$key]->category_id ?>">
          <?= $category[$key]->category_name?>
        </option>
      <?php endforeach; ?>
    </select>
  </fieldset>
  <fieldset>
    <textarea name="description" rows="10" cols="30" placeholder="Въведете описание."></textarea>
  </fieldset>
  <fieldset>

    <input type="submit" name="submit" value="Създай">
  </fieldset>
</form>
<?php if (isset($_POST['name'])): ?>
  <p>
    Успешно добавихте преживяване.
  </p>
<?php endif; ?>
