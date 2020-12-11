<?php
//----------------------------------------------------
// Pager
//----------------------------------------------------

add_filter('wp_link_pages_args', function() {
  $defaults = array(
    'before' => '<nav class="pager"><span class="pager-title">Page: </span>',
    'after' => '</nav>',
    'link_before' => '',
    'link_after' => '',
    'aria_current' => 'page',
    'next_or_number' => 'number',
    'separator' => ' / ',
    'nextpagelink' => __('Next page'),
    'previouspagelink' => __('Previous page'),
    'pagelink' => '<span>%</span>',
    'echo' => 1
  );
  return $defaults;
});