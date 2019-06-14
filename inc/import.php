<?php
//----------------------------------------------------
// Import
//----------------------------------------------------

// Add files
function add_files() {
  if ( !is_admin() ) {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  }
}
add_action('wp_enqueue_scripts', 'add_files', 1);