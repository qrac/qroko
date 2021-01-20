<?php
//----------------------------------------------------
// Support
//----------------------------------------------------

// Custom theme support
function qroko_custom_theme_support() {

  // Support title tag
  add_theme_support('title-tag');

  // Support default rss feed
  add_theme_support('automatic-feed-links');

  // Support html5
  add_theme_support('html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));

  // Support thumbnail
  add_theme_support('post-thumbnails');

  // Support Gutenberg
  add_theme_support('wp-block-styles');

  // Support editor styles
  add_theme_support('editor-styles');

  // Support align wide
  add_theme_support('align-wide');

}
add_action('after_setup_theme', 'qroko_custom_theme_support');

