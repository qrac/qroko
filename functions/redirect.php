<?php
//----------------------------------------------------
// Redirect
//----------------------------------------------------

// Custom Redirect
add_action('template_redirect', function() {
  $redirect_url = get_option('redirect_url');
  $active_redirect = get_option('active_redirect');

  if(!is_admin() && !is_user_logged_in() && $redirect_url && $active_redirect){
    wp_redirect( $redirect_url, 301 );
    exit();
  }
});