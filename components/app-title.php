<?php
//----------------------------------------------------
// App Title
//----------------------------------------------------
?>
<h1>
  <?php if (is_home() || is_front_page()): ?>
    Home
  <?php elseif (is_search()): ?>
    <?php printf( esc_html__('検索結果: %s'), '' . get_search_query() . ''); ?>
  <?php elseif (is_archive()): ?>
    <?php single_cat_title(); ?>
  <?php elseif (is_single()): ?>
    <?php the_title(); ?>
  <?php else: ?>
    <?php the_title(); ?>
  <?php endif; ?>
</h1>