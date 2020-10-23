 <!-- Blog Post -->
 <div class="card mb-4 mt-4">
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(
              'large', 
              array(
                'class' => 'img-fluid'
              )); ?>
          </a>
      </div>
      <div class="col-lg-6">
        <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?> " class="btn btn-primary">Ver más &rarr;</a>
      </div>
    </div>
  </div>
  <div class="card-footer text-muted">
    Publicado el <?php the_date(); ?> por
    <a href="#"><?php the_author(); ?></a> |
    <?php the_category(', '); ?>
  </div>
</div>
