  
  <?php get_header(); ?>

<div class="mt-3"></div>
<div class="container">
  <div class="row"> 

      <!-- The_Loop -->
      <?php if(have_posts() ): while(have_posts()): the_post() ?>
      
        <div class="col-lg-6 portfolio-item">
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

    <div class="py-5"></div>
    <!-- getbootstrap.com -->
    <div class="row">
      <div class="col-12 pb-3">
        <h3 class="text-center py-2 bg-dark" style="color:#fff">Noticias</h3>
      </div>
    
       <!-- The_Loop -->
       <?php 
        
        // Noticias, cat 8
        $args = array (
          'cat'            => 8,
          'posts_per_page' => 3
        );

        $filter_posts = new Wp_Query($args);      
      
      if( $filter_posts -> have_posts() ): 
      while($filter_posts -> have_posts()): 
        $filter_posts -> the_post() ?>

      <div class="col-md-4">
        <h2 class="text-center">
          <a href="<?php the_permalink(); ?>">
           <?php the_title() ?>
          </a>
        </h2>
        <?php the_excerpt(); ?>
        <?php the_post_thumbnail('large', array('class' => 'img-fluid')) ?>
        <!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/10/Tras-los-reclamos-vecinales-Vialidad-Provincial-trabajo-en-la-traza-de-la-Ruta-190-1-696x650-1.jpg" class="img-fluid img-thumbnail" alt=""> -->
      </div>

      <?php endwhile; ?>
      <!-- Paginación -->

      <?php else: ?>
      <!-- Not post found -->
      <?php get_template_part('templates-parts/content','none'); ?>

      <?php endif; ?>

      <?php wp_reset_postdata(); ?>
     
    </div>
  </div> <!-- /.container -->
  <div class="py-5"></div>


<?php get_footer(); ?>