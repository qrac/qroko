<?php
//----------------------------------------------------
// Article Category
//----------------------------------------------------
?>
<?php
  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  if ($categories) {
    echo '<p class="article-category">';
    echo __('Category', 'qroko') . ': ';
    foreach( $categories as $category ) {
      $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
    }
    echo trim( $output, $separator );
    echo '</p>';
  }
?>