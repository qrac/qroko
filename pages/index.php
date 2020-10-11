<?php
//----------------------------------------------------
// Index
//----------------------------------------------------
?>
<div class="page-contents">
  <?php get_template_part('components/app-title'); ?>
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
  <?php if (function_exists("pagination")): ?>
    <?php theme_qroko_pagination($additional_loop->max_num_pages);?>
  <?php endif; ?>
</div>