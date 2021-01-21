<?php
//----------------------------------------------------
// Editors
//----------------------------------------------------

// Enqueue editor css
function qroko_enqueue_editor_css($css_name, $file_path) {
  wp_enqueue_style(
    $css_name, get_template_directory_uri() . $file_path, array(),
    date('YmdGis', filemtime(get_template_directory() . $file_path))
  );
}

// Create editor inline css
function qroko_create_editor_inline_css() {
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

// Import editor styles
function qroko_import_editor_styles() {
  qroko_enqueue_editor_css('qroko-editor-style-theme-light', '/assets/css/theme-light.css');
  qroko_enqueue_editor_css('qroko-editor-style-theme-dark', '/assets/css/theme-dark.css');
  qroko_enqueue_editor_css('qroko-editor-style-theme-variable', '/assets/css/theme-variable.css');
  wp_add_inline_style('qroko-editor-style-theme-variable', qroko_create_front_inline_css());
}
add_action('enqueue_block_editor_assets', 'qroko_import_editor_styles');

// Conversion import editor styles
function qroko_conversion_import_editor_styles() {
  add_editor_style('assets/css/editor.css');
}
add_action('after_setup_theme', 'qroko_conversion_import_editor_styles');