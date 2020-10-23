  
  <?php get_header(); ?>

<div class="mt-3"></div>
<div class="container">
  <div class="row"> 

      <!-- The_Loop -->
      <?php if(have_posts() ): while(have_posts()): the_post() ?>
      
        <div class="col-lg-12 portfolio-item">
          <div class="card h-100">
            <a href="#"><?php the_post_thumbnail(
          'large', 
          array(
            'class' => 'img-fluid'
          )); ?></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
              </h4>
              <?php the_excerpt(); ?>    
            </div>
          </div>
        </div>
       

      <?php endwhile; ?>
      <!-- Paginación -->

      <?php else: ?>
      <!-- Not post found -->
      <?php get_template_part('templates-parts/content','none'); ?>

      <?php endif; ?>

      <?php wp_reset_postdata(); ?>


      
    </div> <!-- /.row -->

  </div> <!-- /.container -->
  <div class="py-5"></div>


<?php get_footer(); ?>