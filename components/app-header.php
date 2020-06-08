<?php
//----------------------------------------------------
// App Header
//----------------------------------------------------
?>
<header>
  <h1><?php bloginfo('name'); ?></h1>
  <nav>
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <?php if( has_nav_menu('menu_header_main') ) : ?>
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location' => 'menu_header_main',
        'items_wrap' => '%3$s',
        'depth' => 1,
        'walker' => new custom_walker_nav_menu
      )); ?>
    <?php endif; ?>
  </nav>
</header>