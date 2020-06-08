<?php
//----------------------------------------------------
// Page
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
      <?php the_content(); ?>
    <?php endwhile; ?>
    <?php wp_link_pages(); ?>
  <?php endif; ?>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>