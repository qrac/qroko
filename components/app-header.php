<?php
//----------------------------------------------------
// App Header
//----------------------------------------------------
?>
<header class="app-header">
  <a class="skip-link screen-reader-text" href="#app-main">
    <?php esc_html_e( 'Skip to content', 'qroko' ); ?>
  </a>
  <div class="app-header-contents">
    <a class="app-header-site-name" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>
    <h2 class="app-header-description"><?php bloginfo('description'); ?></h2>
  </div>
</header>