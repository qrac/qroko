<?php
//----------------------------------------------------
// 404
//----------------------------------------------------
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('components/app-head'); ?>
<body <?php body_class(); ?>>
  <?php get_template_part('components/app-header'); ?>
  <?php get_template_part('components/app-menu'); ?>
  <main class="app-main">
    <div class="app-main-contents">
      <p>404</p>
    </div>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>