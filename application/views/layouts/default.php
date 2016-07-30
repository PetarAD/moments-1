<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible", content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аз изживявам</title>
    <link rel="stylesheet" href="<?= site_url('assets/layout/components/normalize-css/normalize.css') ?> ">
    <link rel="stylesheet" href="<?= site_url('assets/layout/components/font-awesome/css/font-awesome.min.css') ?> ">
    <link rel="stylesheet" href="<?= site_url('assets/layout/main.css') ?>">
    <script src="<?= site_url('assets/layout/components/jquery-3.1.0.min.js') ?>"></script>
    <!--[if lt IE 9]>
      <script src="<?= site_url('assets/html5shiv/dist/html5shiv.js') ?>"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header>
        <div class="moto">
          АЗ ИЗЖИВЯВАМ
        </div>
    </header>
    <nav class="main-navigation">
  <ul>
    <li><a href="<?= site_url() ?>"><i class="fa fa-home" aria-hidden="true"></i>
Начало</a></li>
    <li><a href="<?= site_url('/create') ?>"><i class="fa fa-calendar" aria-hidden="true"></i>
Сподели вълнение</a></li>
    <li><a href="<?= site_url('/admin') ?>"><i class="fa fa-lock" aria-hidden="true"></i>
Админ</a></li>
<li><a href="<?= site_url('/canvas') ?>"><i class="fa fa-paint-brush" aria-hidden="true"></i>
Рисувай</a></li>
  </ul>
</nav>


      <main>
        <?= $contents ?>
      </main>

      <footer>
        <nav class="footer-navigation">
          <ul>
            <li><a href="<?= site_url('index.php') ?>"><i class="fa fa-home" aria-hidden="true"></i>
        Начало</a></li>
            <li><a href="<?= site_url('create') ?>"><i class="fa fa-calendar" aria-hidden="true"></i>
      Сподели вълнение</a></li>
            <li><a href="<?= site_url('admin') ?>"><i class="fa fa-lock" aria-hidden="true"></i>
        Админ</a></li>
        <li><a href="<?= site_url('/canvas') ?>"><i class="fa fa-paint-brush" aria-hidden="true"></i>
Рисувай</a></li>
          </ul>
        </nav>
        <ul class="social flex-3">
          <li><a href="#" target="_blank" class="facebook"></a></li>
          <li><a href="#" target="_blank" class="twitter"></a></li>
          <li><a href="#" target="_blank" class="google-plus"></a></li>
          <li><a href="#" target="_blank" class="pinterest"></a></li>
        </ul>
             </section>
        <p class="copy">Всички права запазени. <?= date('Y') ?></p>
      </footer>
    </div>
  </body>
</html>
