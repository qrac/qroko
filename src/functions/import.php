<?php
//----------------------------------------------------
// Import
//----------------------------------------------------

// Front
add_action('wp_enqueue_scripts', function () {
  if ( !is_admin() ) {
    $cssDir = get_template_directory_uri() . '/src/assets/css';
    wp_enqueue_style( 'style', $cssDir . '/style.css' );
    wp_enqueue_style( 'style-front-theme-variable', $cssDir . '/theme-variable.css' );
    wp_enqueue_style( 'style-front-theme-light', $cssDir . '/theme-light.css' );
    wp_enqueue_style( 'style-front-theme-dark', $cssDir . '/theme-dark.css' );
    wp_enqueue_style( 'style-front', $cssDir . '/front.css' );
  }
}, 1);

// Editor
add_action( 'after_setup_theme', function () {
  $cssDir = 'src/assets/css';
  add_editor_style( $cssDir . '/variable.css' );
  add_editor_style( $cssDir . '/theme-light.css' );
  add_editor_style( $cssDir . '/theme-dark.css' );
  add_editor_style( $cssDir . '/editor.css' );
});