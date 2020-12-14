<?php
//----------------------------------------------------
// Article Thumbnail
//----------------------------------------------------
?>
<?php
  $qroko_page_top_thumbnail = get_option('qroko_page_top_thumbnail');
  if (has_post_thumbnail() && $qroko_page_top_thumbnail):
?>
  <div class="article-thumbnail">
    <?php the_post_thumbnail('large'); ?>
  </div>
<?php endif; ?>