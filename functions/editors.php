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
  define("TEMPLATE_DIRE", get_template_directory_uri());
  define("TEMPLATE_PATH", get_template_directory());

  function wp_editors_css($css_name, $file_path) {
    wp_enqueue_style(
      $css_name, TEMPLATE_DIRE . $file_path, array(),
      date('YmdGis', filemtime(TEMPLATE_PATH . $file_path))
    );
  }

  wp_editors_css('theme-editors-theme-variable-css', '/assets/css/theme-variable.css');
  wp_editors_css('theme-editors-theme-light-css', '/assets/css/theme-light.css');
  wp_editors_css('theme-editors-theme-dark-css', '/assets/css/theme-dark.css');
  wp_editors_css('theme-editors-editor-css', '/assets/css/editor.css');
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