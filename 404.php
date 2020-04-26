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
  <main class="main">
    <div class="section">
      <div class="inner is-width-min">
        <p class="text">404</p>
      </div>
    </div>
  </main>
  <?php get_template_part('components/app-footer'); ?>
</body>
</html>