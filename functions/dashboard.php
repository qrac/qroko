<?php
//----------------------------------------------------
// Dashboard
//----------------------------------------------------

// Add favicon
function admin_favicon() {
  echo '<link rel="icon" href="'.get_template_directory_uri().'/apple-touch-icon.png" />';
  echo '<link rel="icon" href="'.get_template_directory_uri().'/favicon.png" />';
}
add_action( 'admin_head', 'admin_favicon' );