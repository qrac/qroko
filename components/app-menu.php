<?php
//----------------------------------------------------
// App Menu
//----------------------------------------------------
?>
<?php if( has_nav_menu('menu_header_main') ) : ?>
  <section class="app-menu">
    <nav class="app-menu-nav">
        <?php wp_nav_menu(array(
          'container' => false,
          'theme_location' => 'menu_header_main',
          'items_wrap' => '<ul>%3$s</ul>',
          'depth' => 1,
        )); ?>
    </nav>
  </section>
<?php endif; ?>