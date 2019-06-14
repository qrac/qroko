<?php
//----------------------------------------------------
// Remove
//----------------------------------------------------

// Disable pinback
add_filter( 'xmlrpc_enabled', '__return_false' );

// Remove short url
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// Remove version of WordPress
remove_action( 'wp_head', 'wp_generator' );

// Remove dns prefetch
function remove_dns_prefetch( $hints, $relation_type ) {
  if ( 'dns-prefetch' === $relation_type ) {
    return array_diff( wp_dependencies_unique_hosts(), $hints );
  }
  return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );