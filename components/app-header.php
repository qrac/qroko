<?php
//----------------------------------------------------
// App Header
//----------------------------------------------------
?>
<header class="app-header">
  <div class="app-header-contents">
    <a class="app-header-site-name" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>
    <h2 class="app-header-description"><?php bloginfo('description'); ?></h2>
  </div>
</header>