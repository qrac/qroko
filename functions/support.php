<?php
//----------------------------------------------------
// Support
//----------------------------------------------------

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

// Support post formats
add_theme_support('post-formats', array(
  'aside',
  'image',
  'video',
  'quote',
  'link',
  'gallery',
  'status',
  'audio',
  'chat',
));