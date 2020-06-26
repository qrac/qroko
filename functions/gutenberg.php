<?php
//----------------------------------------------------
// Gutenberg
//----------------------------------------------------

// Support Gutenberg
add_theme_support( 'wp-block-styles' );

// Support editor styles
add_theme_support( 'editor-styles' );

// Add editor style
add_editor_style( 'editor-style.css' );

// Admin Head Custom Body Max Width
function admin_head_custom_body_max_width() {
  $body_max_width = get_option('preview_body_max_width');

  if($body_max_width != 620 && $body_max_width != null && $body_max_width > 0) {
    echo '<style>' .
      ':root .editor-styles-wrapper { --qs-site-width: ' .
      $body_max_width .
      'px; }' .
      '</style>';
  }
}
add_action('admin_head', 'admin_head_custom_body_max_width');

// Admin Dark Mode CSS
function admin_dark_mode_css( $wp_admin_bar ) {
  $dark_mode_css = get_option('active_admin_dark_mode_css');

  if ($dark_mode_css) {
    wp_enqueue_style( 'editor-style-dark', get_template_directory_uri() . '/editor-style-dark.css' );
  }
}
add_action( 'enqueue_block_editor_assets', 'admin_dark_mode_css' );