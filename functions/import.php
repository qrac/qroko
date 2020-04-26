<?php
//----------------------------------------------------
// Import
//----------------------------------------------------

// Add files
function add_files() {
  if ( !is_admin() ) {
    wp_enqueue_style( 'css-reset', get_template_directory_uri() . '/assets/css/bases/reset.css' );
    wp_enqueue_style( 'css-html', get_template_directory_uri() . '/assets/css/bases/html.css' );
    wp_enqueue_style( 'css-main', get_template_directory_uri() . '/assets/css/layouts/main.css' );
    wp_enqueue_style( 'css-section', get_template_directory_uri() . '/assets/css/layouts/section.css' );
    wp_enqueue_style( 'css-grid', get_template_directory_uri() . '/assets/css/layouts/grid.css' );
    wp_enqueue_style( 'css-text', get_template_directory_uri() . '/assets/css/elements/text.css' );
    wp_enqueue_style( 'css-article', get_template_directory_uri() . '/assets/css/modules/article.css' );
    wp_enqueue_style( 'css-wysiwyg', get_template_directory_uri() . '/assets/css/modules/wysiwyg.css' );
    wp_enqueue_style( 'css-space', get_template_directory_uri() . '/assets/css/utilities/space.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  }
}
add_action('wp_enqueue_scripts', 'add_files', 1);