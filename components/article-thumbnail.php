<?php
//----------------------------------------------------
// Article Thumbnail
//----------------------------------------------------
?>
<?php if (has_post_thumbnail()): ?>
  <div class="article-thumbnail-wrap">
    <?php the_post_thumbnail('large'); ?>
  </div>
<?php endif; ?>