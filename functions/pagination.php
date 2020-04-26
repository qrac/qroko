<?php
//----------------------------------------------------
// Pagination
//----------------------------------------------------

function pagination($pages = '', $range = 2) {
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
    echo "<nav class=\"pagination\"><ul class=\"pagination-list\">";
    if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
      echo "<li class=\"pagination-item is-prev-all\"><a href=\"" .
        get_pagenum_link(1) .
        "\">First</a></li>";
    }
    if ($paged > 1 && $showitems < $pages) {
      echo "<li class=\"pagination-item is-prev\"><a href=\"" .
        get_pagenum_link($paged - 1) .
        "\">Prev</a></li>";
    }
    for ($i = 1; $i <= $pages; $i++) {
      if (
        1 != $pages &&
        (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) ||
          $pages <= $showitems)
      ) {
        echo $paged == $i
          ? "<li class=\"pagination-item is-current\"><span>" .
            $i .
            "</span></li>"
          : "<li class=\"pagination-item\"><a href=\"" .
            get_pagenum_link($i) .
            "\">" .
            $i .
            "</a></li>";
      }
    }
    if (
      $paged < $pages - 1 &&
      $paged + $range - 1 < $pages &&
      $showitems < $pages
    ) {
      echo "<li class=\"pagination-item is-more\"><a href=\"" .
        get_pagenum_link($paged + 1) .
        "\">...</a></li>";
    }
    if ($paged < $pages && $showitems < $pages) {
      echo "<li class=\"pagination-item is-next\"><a href=\"" .
        get_pagenum_link($paged + 1) .
        "\">Next</a></li>";
    }
    if (
      $paged < $pages - 1 &&
      $paged + $range - 1 < $pages &&
      $showitems < $pages
    ) {
      echo "<li class=\"pagination-item is-next-all\"><a href=\"" .
        get_pagenum_link($pages) .
        "\">Last</a></li>";
    }
    echo "</ul></nav>";
  }
}