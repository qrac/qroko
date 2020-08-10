<?php
//----------------------------------------------------
// Index
//----------------------------------------------------
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('src/components/app-head'); ?>
<body <?php body_class(); ?>>
  <?php get_template_part('src/components/app-header'); ?>
  <?php get_template_part('src/components/app-nav'); ?>
  <main class="app-main">
    <?php if( is_404() ): ?>
      <?php get_template_part('src/pages/404'); ?>
    <?php elseif( is_page() ): ?>
      <?php get_template_part('src/pages/page'); ?>
    <?php elseif( is_singular() ): ?>
      <?php get_template_part('src/pages/single'); ?>
    <?php else: ?>
      <?php get_template_part('src/pages/index'); ?>
    <?php endif; ?>
  </main>
  <?php get_template_part('src/components/app-footer'); ?>
</body>
</html>