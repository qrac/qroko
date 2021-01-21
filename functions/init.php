<?php
//----------------------------------------------------
// Init
//----------------------------------------------------

// Translate
load_theme_textdomain('qroko', get_template_directory() . '/languages');

// Content Width
function qroko_content_width() {
  $max_site_width = get_option('qroko_max_site_width');

  if (!isset($content_width)) {
    $content_width = 620;
  }
  if ($max_site_width != null && $max_site_width > 0) {
    $content_width = $max_site_width;
  }
}
add_action( 'after_setup_theme', 'qroko_content_width', 0);