<?php
//----------------------------------------------------
// Article Date
//----------------------------------------------------
?>
<p class="article-date">
  <time datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>">
    公開日：<?php the_time('Y年n月j日'); ?>
  </time>
  <?php if (get_the_modified_time('Y-m-d') != get_the_time('Y-m-d')) : ?>
    <time datetime="<?php the_modified_time('Y-m-d'); ?>T<?php the_modified_time('H:i:sP'); ?>">
      （最終更新日：<?php the_modified_time('Y年n月j日') ?>）
    </time>
  <?php endif; ?>
</p>