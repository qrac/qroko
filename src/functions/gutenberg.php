<?php
//----------------------------------------------------
// Gutenberg
//----------------------------------------------------

// Support Gutenberg
add_theme_support( 'wp-block-styles' );

// Support editor styles
add_theme_support( 'editor-styles' );

// Admin Head Custom Body Max Width
function admin_head_custom_body_max_width() {
  $body_max_width = get_option('preview_body_max_width');

  if($body_max_width != 620 && $body_max_width != null && $body_max_width > 0) {
    echo '<style>' .
      ':root .editor-styles-wrapper { --site-width: ' .
      $body_max_width .
      'px; }' .
      '</style>';
  }
}
add_action('admin_head', 'admin_head_custom_body_max_width');