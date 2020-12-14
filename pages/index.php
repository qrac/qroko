<?php
//----------------------------------------------------
// Index
//----------------------------------------------------
?>
<div class="app-contents">
  <article class="article">
    <?php get_template_part('components/article-title'); ?>
  </article>
  <?php if (have_posts()): ?>
    <ul>
      <?php while (have_posts()): the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; ?>
  <?php if (function_exists('qroko_pagination')) {
    qroko_pagination($wp_query->max_num_page);
  }?>
</div>