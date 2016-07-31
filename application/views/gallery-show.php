<section class="gallery cf">
<?php foreach ($result as $key=> $value): ?>
  <div>
    <img src="data:image/jpeg;base64,<?= base64_encode($result[$key]->img) ?>" />
  </div>
<?php endforeach; ?>
</section>