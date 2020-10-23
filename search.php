<?php get_header(); ?>

<div class="container">
  <div class="my-5"></div>
  <div class="col-md-6">
    <?php get_search_form(); ?>
  </div>
  <!-- Llama al archivo content-search.php 
  ---------------------------------------- -->

  <?php if(have_posts() ): while(have_posts()): the_post() ?>

    <?php get_template_part('templates-parts/content','search'); ?>

  <?php endwhile; ?>
  <!-- Paginación -->

  <?php else: ?>
  <!-- Not post found -->
  <?php get_template_part('templates-parts/content','none'); ?>

  <?php endif; ?>

  <?php wp_reset_postdata(); ?>
  
</div>
<?php get_footer(); ?>