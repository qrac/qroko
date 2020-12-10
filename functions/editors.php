<?php
//----------------------------------------------------
// Editors
//----------------------------------------------------

// Support Gutenberg
add_theme_support('wp-block-styles');

// Support editor styles
add_theme_support('editor-styles');

// Import editor styles
function qroko_import_editor_styles() {
  add_editor_style('assets/css/theme-variable.css');
  add_editor_style('assets/css/theme-light.css');
  add_editor_style('assets/css/theme-dark.css');
  add_editor_style('assets/css/editor.css');
}
add_action('after_setup_theme', 'qroko_import_editor_styles');