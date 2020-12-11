<?php
//----------------------------------------------------
// Page
//----------------------------------------------------
?>
<div class="page-contents">
  <?php if (have_posts()): ?>
    <article class="article">
      <?php while (have_posts()): the_post(); ?>
        <?php if (has_post_thumbnail()): ?>
          <div class="article-thumbnail-wrap">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        <header class="article-header">
          <?php get_template_part('components/app-title'); ?>
        </header>
        <div class="article-contents">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
      <?php wp_link_pages(); ?>
    </article>
  <?php endif; ?>
</div>