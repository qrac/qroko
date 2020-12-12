<?php
//----------------------------------------------------
// Page
//----------------------------------------------------
?>
<div class="app-contents">
  <?php if (have_posts()): ?>
    <article class="article">
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part('components/article-thumbnail'); ?>
        <?php get_template_part('components/article-header'); ?>
        <?php get_template_part('components/article-contents'); ?>
      <?php endwhile; ?>
      <?php wp_link_pages(); ?>
    </article>
  <?php endif; ?>
</div>