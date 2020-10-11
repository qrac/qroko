<?php
//----------------------------------------------------
// Fronts
//----------------------------------------------------

// Import
add_action('wp_enqueue_scripts', function() {
  define("TEMPLATE_DIRE", get_template_directory_uri());
  define("TEMPLATE_PATH", get_template_directory());

  function wp_fronts_css($css_name, $file_path) {
    wp_enqueue_style(
      $css_name, TEMPLATE_DIRE . $file_path, array(),
      date('YmdGis', filemtime(TEMPLATE_PATH . $file_path))
    );
  }

  function wp_fronts_script($script_name, $file_path, $bool = true) {
    wp_enqueue_script(
      $script_name, TEMPLATE_DIRE . $file_path, array(),
      date('YmdGis', filemtime(TEMPLATE_PATH . $file_path)), $bool
    );
  }

  if (!is_admin()) {
    wp_fronts_css('theme-fronts-theme-variable-css', '/assets/css/theme-variable.css');
    wp_fronts_css('theme-fronts-theme-light-css', '/assets/css/theme-light.css');
    wp_fronts_css('theme-fronts-theme-dark-css', '/assets/css/theme-dark.css');
    wp_fronts_css('theme-fronts-front-css', '/assets/css/front.css');
    wp_fronts_css('theme-style', '/style.css');
  }
});

// Custom Assets
add_action('wp_head', function() {
  $icon_url = esc_url(get_theme_mod('icon_url'));
  $favicon_url = esc_url(get_theme_mod('favicon_url'));

  if($icon_url) {
    echo '<link rel="apple-touch-icon" href="' . $icon_url . '" />';
  }
  if($favicon_url) {
    echo '<link rel="icon" href="' . $favicon_url . '" />';
  }
});

// Custom Site Width
add_action('wp_head', function() {
  $body_max_width = get_option('preview_body_max_width');

  if($body_max_width != null && $body_max_width > 0) {
    echo '<style>' .
      ':root body { --theme-site-width: ' . $body_max_width . 'px; }' .
      '</style>';
  }
});