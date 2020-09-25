<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('title'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <!-- Ruta absoluta, que es toda la url! -->
  <!-- <link rel="stylesheet" href="http://localhost/wp-agosto-2020/wordpress-avanzado/wp-content/themes/portfolio-moderno/style.css"> -->

  <!-- Bloginfo -->
  <!-- Framework -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.css">
  <!-- Main styles -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a href="#/" class="navbar-brand">LTW!</a>
  </nav>

  <header class="jumbotron">
    <h2 class="text-center font-weight-light display-4"><?php bloginfo('title'); ?></h2>
    <p class="text-center font-weight-bolder"><?php bloginfo('description'); ?></p>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2>Contenido principal</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, quaerat quia. Beatae aliquam, reprehenderit sint officia quidem unde, molestiae sed facere ratione repellendus quas, ab quia excepturi magni corrupti nemo?</p>
        <p>Tranquilos, estamos usando la versión <?php bloginfo('version');  ?></p>
      </div>
      <div class="col-lg-4">
        <h4>sidebar</h4>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, porro quae itaque sapiente, magnam animi beatae sed ea culpa harum vitae amet at quaerat dignissimos? Minus quasi labore debitis. Sit.</p>
        <p>Cualquier problema, contactate con el admin del sitio siguiente mail <?php bloginfo('admin_email');  ?></p>
      </div>
    </div>
  </div>

  

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="http://localhost/wp-agosto-2020/wordpress-avanzado/wp-content/themes/portfolio-moderno/assets/js/bootstrap.min.js"></script>
</body>
</html>