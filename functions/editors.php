<?php
//----------------------------------------------------
// Editors
//----------------------------------------------------

// Support Gutenberg
add_theme_support('wp-block-styles');

// Support editor styles
add_theme_support('editor-styles');

// Import
add_action('after_setup_theme', function() {
  add_editor_style('assets/css/theme-variable.css');
  add_editor_style('assets/css/theme-light.css');
  add_editor_style('assets/css/theme-dark.css');
  add_editor_style('assets/css/editor.css');
});

// Custom Site Width
add_action('admin_head', function() {
  $body_max_width = get_option('preview_body_max_width');

  if($body_max_width != null && $body_max_width > 0) {
    echo '<style>' .
      ':root .editor-styles-wrapper { --theme-site-width: ' . $body_max_width . 'px; }' .
      '</style>';
  }
});