<?php
//----------------------------------------------------
// Article Header
//----------------------------------------------------
?>
<header class="article-header">
  <?php get_template_part('components/article-title'); ?>
  <?php if (is_single()): ?>
    <?php get_template_part('components/article-date'); ?>
  <?php endif; ?>
</header>