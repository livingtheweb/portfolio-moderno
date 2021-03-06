  
  <?php get_header(); ?>

  <div class="mt-3"></div>
  <div class="container">
    <div class="row">

   
      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- The_Loop -->
        <?php 
        
          // Noticias, cat 8
          $args = array (
            'cat'            => 8,
            'posts_per_page' => 2
          );

          $filter_posts = new Wp_Query($args);

        
        
        if( $filter_posts -> have_posts() ): 
        while($filter_posts -> have_posts()): 
          $filter_posts -> the_post() ?>

        <!-- Blog Post -->
        <div class="card mb-4">      
          <?php the_post_thumbnail(
            'large', 
            array(
              'class' => 'img-fluid'
            )); ?>
          <div class="card-body">         
            <h2 class="card-title"> 
              <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
            </h2>
            <?php the_excerpt(); ?>            
            <a href="<?php the_permalink(); ?> " class="btn btn-primary">Ver más &rarr;</a>
          </div>
          <div class="card-footer text-muted">
           Publicado el <?php the_date(); ?> por
            <a href="#"><?php the_author(); ?></a> |
            <?php the_category(', '); ?>
          </div>
        </div>

        <?php endwhile; ?>
        <!-- Paginación -->

        <?php else: ?>
        <!-- Not post found -->
        <?php get_template_part('templates-parts/content','none'); ?>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>


        
      </div>
      <div class="col-md-4">
        <?php get_sidebar('blog'); ?>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->


  <?php get_footer(); ?>