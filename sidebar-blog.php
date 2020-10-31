  <!-- Search Widget -->
  <div class="card mb-4">
    <h5 class="card-header">Buscar</h5>
    <div class="card-body">
      <div class="input-group">
        <?php get_search_form(); ?>

        <!-- <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-secondary" type="button">Go!</button>
        </span> -->
      </div>
    </div>
  </div>

  <!-- Categories Widget -->
  <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12">
          <h5>Sidebar del Blog</h5>         
        </div>
      </div>
    </div>
  </div>

  <!-- Side Widget -->
  <div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
     <?php dynamic_sidebar('sidebar-widgets') ?>
    </div>
  </div>