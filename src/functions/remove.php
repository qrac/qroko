<?php
//----------------------------------------------------
// Remove
//----------------------------------------------------

// Disable pinback
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove comment feed
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

// Remove post system
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// Remove short url
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// Remove version of WordPress
remove_action( 'wp_head', 'wp_generator' );

// Remove excerpt p wrap
remove_filter('the_excerpt','wpautop');

// Remove admin bar of site
add_filter( 'show_admin_bar', '__return_false' );

// Remove more id
add_filter('the_content_more_link', function($link){
  $offset = strpos($link, '#more-');
  if ($offset) {
    $end = strpos($link, '"', $offset);
  }
  if ($end) {
    $link = substr_replace($link, '', $offset, $end - $offset);
  }
  return $link;
});

// Remove author
add_action('template_redirect', function() {
  if(is_author()) {
    wp_safe_redirect(home_url(), 302);
    exit;
  }
});