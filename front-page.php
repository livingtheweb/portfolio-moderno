
  <?php get_header() ?>

  <header class="jumbotron">
    <h2 class="text-center font-weight-light display-4"><?php bloginfo('title'); ?></h2>
    <p class="text-center font-weight-bolder"><?php bloginfo('description'); ?></p>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h2>Contenido principal <small>Soy FRONT-PAGE.PHP</small></h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, quaerat quia. Beatae aliquam, reprehenderit sint officia quidem unde, molestiae sed facere ratione repellendus quas, ab quia excepturi magni corrupti nemo?</p>
        <p>Tranquilos, estamos usando la versión <?php bloginfo('version');  ?></p>
      </div>
      <div class="col-lg-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>