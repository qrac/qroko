<?php
//----------------------------------------------------
// Index
//----------------------------------------------------
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('components/app-head'); ?>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php get_template_part('components/app-header'); ?>
  <?php get_template_part('components/app-nav'); ?>
  <main class="app-main">
    <?php if(is_404()): ?>
      <?php get_template_part('pages/404'); ?>
    <?php elseif(is_page()): ?>
      <?php get_template_part('pages/page'); ?>
    <?php elseif(is_single()): ?>
      <?php get_template_part('pages/single'); ?>
    <?php else: ?>
      <?php get_template_part('pages/index'); ?>
    <?php endif; ?>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>