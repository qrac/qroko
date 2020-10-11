<?php
//----------------------------------------------------
// App Nav
//----------------------------------------------------
?>
<?php if( has_nav_menu('menu_header_main') ) : ?>
  <nav class="app-nav">
    <div class="app-nav-menu">
      <?php wp_nav_menu(array(
        'container' => false,
        'theme_location' => 'menu_header_main',
        'items_wrap' => '<ul>%3$s</ul>',
        'depth' => 1,
      )); ?>
    </div>
  </nav>
<?php endif; ?>