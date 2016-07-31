<form action="<?= site_url('/galleries/add') ?>" method="POST">
  <fieldset>
   <label for="name">Име на снимката:</label>
    <input id="name" type="text" name="name" placeholder="Напишете име на снимката">
  </fieldset>
  <fieldset>
  <label for="img">Адрес на снимката:</label>
  <input id="img" type="text" name="img" placeholder="Напишете адреса на снимката">
  </fieldset>
  <fieldset>
    <input type="submit" name="submit" value="Създай">
  </fieldset>
</form>