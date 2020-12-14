<?php
//----------------------------------------------------
// Article Meta
//----------------------------------------------------
?>
<div class="article-meta">
  <div class="article-meta-box">
    <?php get_template_part('components/article-date'); ?>
  </div>
  <?php
    $categories = get_the_category();
    $tags = get_the_tags();
    if ($categories || $tags):
  ?>
    <div class="article-meta-box">
      <?php get_template_part('components/article-category'); ?>
      <?php get_template_part('components/article-tag'); ?>
    </div>
  <?php endif; ?>
</div>