<?php
//----------------------------------------------------
// Single
//----------------------------------------------------
?>
<div class="app-contents">
  <?php if (have_posts()): ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part('components/article-thumbnail'); ?>
        <?php get_template_part('components/article-header'); ?>
        <?php get_template_part('components/article-contents'); ?>
        <?php comments_template(); ?>
      <?php endwhile; ?>
      <?php wp_link_pages(); ?>
    </article>
  <?php endif; ?>
  <?php
    $qroko_hide_post_navigation = get_option('qroko_hide_post_navigation');
    if (!$qroko_hide_post_navigation):
  ?>
    <?php the_post_navigation(); ?>
  <?php endif; ?>
</div>