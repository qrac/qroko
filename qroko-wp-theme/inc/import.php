<?php
//----------------------------------------------------
// Import
//----------------------------------------------------

// Add files
function add_files() {
  if ( !is_admin() ) {
    wp_css('style', '/style.css');
  }
}
add_action('wp_enqueue_scripts', 'add_files', 1);