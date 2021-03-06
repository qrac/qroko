<?php
//----------------------------------------------------
// Article Title
//----------------------------------------------------
?>
<h1 class="article-title">
  <?php if (is_home() || is_front_page()): ?>
    <?php _e('Home', 'qroko'); ?>
  <?php elseif (is_search()): ?>
    <?php printf(esc_html_e('Search Results', 'qroko') . ': %s', '' . get_search_query() . ''); ?>
  <?php elseif (is_archive()): ?>
    <?php the_archive_title(); ?>
  <?php elseif (is_singular()): ?>
    <?php the_title(); ?>
  <?php else: ?>
    <?php the_title(); ?>
  <?php endif; ?>
</h1>