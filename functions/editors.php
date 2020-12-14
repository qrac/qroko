<?php
//----------------------------------------------------
// Editors
//----------------------------------------------------

// Support Gutenberg
add_theme_support('wp-block-styles');

// Support editor styles
add_theme_support('editor-styles');

// Support align wide
add_theme_support('align-wide');

// Import editor styles
function qroko_import_editor_styles() {
  add_editor_style('assets/css/theme-variable.css');
  add_editor_style('assets/css/theme-light.css');
  add_editor_style('assets/css/theme-dark.css');
  add_editor_style('assets/css/editor.css');
}
add_action('after_setup_theme', 'qroko_import_editor_styles');

// Custom editor max site width
function qroko_custom_editor_max_site_width() {
  $max_site_width = get_option('qroko_max_site_width');

  if ($max_site_width != null && $max_site_width > 0) {
    echo '<style>' .
      ':root .editor-styles-wrapper { --theme-site-width: ' . $max_site_width . 'px; }' .
      '</style>';
  }
}
add_action('admin_head', 'qroko_custom_editor_max_site_width');