<?php get_header() ?>

<div class="container pt-5">
  <div class="row">
    <div class="col-9">
      <!-- The_Loop -->
      <?php if(have_posts() ): while(have_posts()): the_post() ?>

        <?php the_content(); ?>

      <?php endwhile; ?>
        <!-- Paginación -->

        <?php else: ?>
        <!-- Not post found -->
        <?php get_template_part('templates-parts/content','none'); ?>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
     
    </div>

    <?php 
      
      if ( is_page('cursos') ) {
        echo '<div class="col-3">
        <h3>Sidebar cursos</h3>
      </div>';
      } elseif ( is_page('talleres')) {
        echo '<div class="col-3">
        <h3>Sidebar talleres</h3>
      </div>';
      } else {
        // 
      }
    ?>
    
  </div>
</div>

<?php get_footer() ?>
