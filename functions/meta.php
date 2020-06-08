<?php
//----------------------------------------------------
// Meta
//----------------------------------------------------

// WP Head Custom Icon
function wp_head_custom_icon() {
  $icon_url = get_custom_icon_url();

  if($icon_url) {
    echo '<link rel="apple-touch-icon" href="' .
    $icon_url .
      '" />';
  }
}
add_action('wp_head', 'wp_head_custom_icon');

// WP Head Custom Favicon
function wp_head_custom_favicon() {
  $favicon_url = get_custom_favicon_url();

  if($favicon_url) {
    echo '<link rel="icon" href="' .
      $favicon_url .
      '" />';
  }
}
add_action('wp_head', 'wp_head_custom_favicon');

// WP Head Custom Body Max Width
function wp_head_custom_body_max_width() {
  $body_max_width = get_option('preview_body_max_width');

  if($body_max_width != 620 && $body_max_width != null && $body_max_width > 0) {
    echo '<style>' .
      ':root body { --qs-site-width: ' .
      $body_max_width .
      'px; }' .
      '</style>';
  }
}
add_action('wp_head', 'wp_head_custom_body_max_width');