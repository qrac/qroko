<?php
//----------------------------------------------------
// Article Thumbnail
//----------------------------------------------------
?>
<?php
  $qroko_hide_page_thumbnail = get_option('qroko_hide_page_thumbnail');
  if (has_post_thumbnail() && !$qroko_hide_page_thumbnail):
?>
  <div class="article-thumbnail">
    <?php the_post_thumbnail('large'); ?>
  </div>
<?php endif; ?>