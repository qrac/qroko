<?php
//----------------------------------------------------
// Pager
//----------------------------------------------------

add_filter('wp_link_pages_args', function() {
  $defaults = array(
    'before' => '<nav class="pager"><span class="pager-title">' . __('Page', 'qroko') . ': </span>',
    'after' => '</nav>',
    'link_before' => '',
    'link_after' => '',
    'aria_current' => 'page',
    'next_or_number' => 'number',
    'separator' => ' / ',
    'nextpagelink' => __('Next page', 'qroko'),
    'previouspagelink' => __('Previous page', 'qroko'),
    'pagelink' => '<span>%</span>',
    'echo' => 1
  );
  return $defaults;
});