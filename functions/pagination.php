<?php
//----------------------------------------------------
// Pagination
//----------------------------------------------------

function qroko_pagination($pages = '', $range = 2) {
  $showitems = $range * 2 + 1;
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }

  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }

  if (1 != $pages) {
    echo '<nav class="pagination"><span>' . __('Page', 'qroko') . ': </span>';
    if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
      echo '<a href="' . get_pagenum_link(1) . '">' . __('First', 'qroko') . '</a> / ';
    }
    if ($paged > 1 && $showitems < $pages) {
      previous_posts_link(__('Prev', 'qroko'));
    }
    for ($i = 1; $i <= $pages; $i++) {
      if (
        1 != $pages &&
        (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) ||
          $pages <= $showitems)
      ) {
        if ($i == 1) {
          echo $paged == $i
            ? '<span>' . $i . '</span>'
            : ' / <a href="' . get_pagenum_link($i) . '">' . $i . '</a>';
        } else {
          echo $paged == $i
            ? ' / <span>' . $i . '</span>'
            : ' / <a href="' . get_pagenum_link($i) . '">' . $i . '</a>';
        }
      }
    }
    if (
      $paged < $pages - 1 &&
      $paged + $range - 1 < $pages &&
      $showitems < $pages
    ) {
      echo ' / <a href="' . get_pagenum_link($paged + 1) . '">...</a>';
    }
    if ($paged < $pages && $showitems < $pages) {
      echo ' / ';
      next_posts_link(__('Next', 'qroko'));
    }
    if (
      $paged < $pages - 1 &&
      $paged + $range - 1 < $pages &&
      $showitems < $pages
    ) {
      echo ' / <a href="' . get_pagenum_link($pages) . '">' . __('Last', 'qroko') . '</a>';
    }
    echo "</nav>";
  }
}