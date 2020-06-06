<?php
//----------------------------------------------------
// Single
//----------------------------------------------------
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('components/app-head'); ?>
<body <?php body_class(); ?>>
  <?php get_template_part('components/app-header'); ?>
  <?php get_template_part('components/app-title'); ?>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <?php if (is_single()): ?>
        <p><?php the_time('Y年n月j日'); ?></p>
      <?php endif; ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>