<?php
//----------------------------------------------------
// Pager
//----------------------------------------------------

function pager_wp_link_pages() {
  $defaults = array(
    'before' => '<nav class="pager"><span class="pager-title">Page: </span>',
    'after' => '</nav>',
    'link_before' => '',
    'link_after' => '',
    'next_or_number' => 'number',
    'separator' => ' / ',
    'nextpagelink' => __('Next page'),
    'previouspagelink' => __('Previous page'),
    'pagelink' => '<span>%</span>',
    'echo' => 1
  );
  return $defaults;
}
add_filter('wp_link_pages_args', 'pager_wp_link_pages');