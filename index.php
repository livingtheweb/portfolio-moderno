  
  <?php get_header(); ?>

  <div class="mt-3"></div>
  <div class="container">
    <div class="row">

   
      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- The_Loop -->
        <?php if(have_posts() ): while(have_posts()): the_post() ?>

        <!-- Blog Post -->
        <div class="card mb-4">
          <!-- <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap"> -->
          <?php the_post_thumbnail(
            'large', 
            array(
              'class' => 'img-fluid'
            )); ?>
          <div class="card-body">
            <h2 class="card-title"><?php the_title(); ?></h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
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
        <?php get_sidebar(); ?>
      </div>
    </div> <!-- /.row -->
  </div> <!-- /.container -->


  <?php get_footer(); ?>