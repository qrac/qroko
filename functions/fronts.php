<?php
//----------------------------------------------------
// Fronts
//----------------------------------------------------

// Enqueue front css
function qroko_enqueue_front_css($css_name, $file_path) {
  wp_enqueue_style(
    $css_name, get_template_directory_uri() . $file_path, array(),
    date('YmdGis', filemtime(get_template_directory() . $file_path))
  );
}

// Create front inline css
function qroko_create_front_inline_css() {
  $output = '';

  $max_site_width = qroko_theme_mod_max_site_width();
  if ($max_site_width != null && $max_site_width != 620 && $max_site_width >= 300) {
    $output .= ":root { --theme-site-width: {$max_site_width}px; }";
  }

  if($output == '') return false;
  $str = array("\t", "\r\n", "\r", "\n");
  $output = str_replace($str, '', $output);

  return $output;
}

// Import front styles
function qroko_import_front_styles() {
  if (!is_admin()) {
    qroko_enqueue_front_css('qroko-front-style-theme-light', '/assets/css/theme-light.css');
    qroko_enqueue_front_css('qroko-front-style-theme-dark', '/assets/css/theme-dark.css');
    qroko_enqueue_front_css('qroko-front-style-theme-variable', '/assets/css/theme-variable.css');
    qroko_enqueue_front_css('qroko-front-style-front', '/assets/css/front.css');
    $hide_post_comment = qroko_theme_mod_hide_post_comment();
    if (!$hide_post_comment) {
      qroko_enqueue_front_css('qroko-front-style-comment', '/assets/css/comment.css');
    }
    qroko_enqueue_front_css('qroko-front-style', '/style.css');
    wp_add_inline_style('qroko-front-style', qroko_create_front_inline_css());
  }
}
add_action('wp_enqueue_scripts', 'qroko_import_front_styles');