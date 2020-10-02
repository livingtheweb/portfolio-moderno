<?php 

  // Funciones nativas de WordPress
  add_theme_support('post-thumbnails');

  // Funciones propias del usuarios
  // function fecha() {
  //   $fecha =  Date('Y');
  //   echo $fecha;
   
  // }

  function sarasa() {
    $fecha =  Date('Y');
    echo $fecha;
  }

// Cargar estilos de manera dinámica
function mariano_styles_scripts() {
  
  wp_enqueue_style( 
    'normalize', 
    get_template_directory_uri() . "/assets/css/normalize.css",    
    'all' 
  );

  wp_enqueue_style( 
    'bootstrap', 
    get_template_directory_uri() . "/assets/css/bootstrap.css",    
    'all' 
  );
  wp_enqueue_style( 
    'style',
    get_stylesheet_uri()
  );

  /* Cargar los script
  ----------------------- */

  // Cargar popper.js
  wp_enqueue_script(
    'popper', 
    get_template_directory_uri() . "/assets/js/popper.min.js", 
    array('jquery'), 
    '1.0', 
    true
  );

  // cargar bootstrap.js
  wp_enqueue_script(
    'bootstrap', 
    get_template_directory_uri() . "/assets/js/bootstrap.min.js", 
    array('jquery'), 
    '1.0', 
    true
  );

// Main styles
  wp_enqueue_script(
    'main', 
    get_template_directory_uri() . "/assets/js/main.js", 
    array('jquery'), 
    '1.0', 
    true
  );


}
add_action('wp_enqueue_scripts','mariano_styles_scripts');



