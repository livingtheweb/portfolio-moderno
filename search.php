<?php get_header(); ?>

<div class="container">
  <div class="my-5"></div>
  <div class="col-md-6">
    <?php get_search_form(); ?>
  </div>
  <!-- Llama al archivo content-search.php 
  ---------------------------------------- -->
  <?php get_template_part('templates-parts/content','search'); ?>
  
</div>
<?php get_footer(); ?>