<?php
//----------------------------------------------------
// Fronts
//----------------------------------------------------

// Import front styles
function qroko_import_front_styles() {
  define("TEMPLATE_DIRE", get_template_directory_uri());
  define("TEMPLATE_PATH", get_template_directory());

  function wp_fronts_css($css_name, $file_path) {
    wp_enqueue_style(
      $css_name, TEMPLATE_DIRE . $file_path, array(),
      date('YmdGis', filemtime(TEMPLATE_PATH . $file_path))
    );
  }

  if (!is_admin()) {
    wp_fronts_css('theme-fronts-theme-variable-css', '/assets/css/theme-variable.css');
    wp_fronts_css('theme-fronts-theme-light-css', '/assets/css/theme-light.css');
    wp_fronts_css('theme-fronts-theme-dark-css', '/assets/css/theme-dark.css');
    wp_fronts_css('theme-fronts-front-css', '/assets/css/front.css');
    wp_fronts_css('theme-style', '/style.css');
  }
}
add_action('wp_enqueue_scripts', 'qroko_import_front_styles');