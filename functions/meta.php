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