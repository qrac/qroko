<?php
//----------------------------------------------------
// Permalink
//----------------------------------------------------

add_filter('wp_unique_post_slug', function($slug, $post_ID, $post_status, $post_type) {
  if (preg_match('/(%[0-9a-f]{2})+/', $slug) ) {
    $slug = 'p' . $post_ID;
  }
  return $slug;
}, 10, 4);