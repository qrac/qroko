<?php
//----------------------------------------------------
// Dashboard
//----------------------------------------------------

// Remove Bar Menu
add_action('admin_bar_menu', function($wp_admin_bar) {
  $wp_admin_bar->remove_menu( 'comments' );
}, 99 );

// Admin Remove Menu
add_action('admin_menu', function() {
  $hidden_comments = get_option('hidden_admin_label_comments');

  global $menu;

  if ($hidden_comments) {
    unset($menu[25]); // コメント
  }
});

// Admin Custom Menu Label
add_action('admin_menu', function() {
  $label_acf = get_option('admin_label_acf');

  global $menu;
  global $submenu;
  //var_dump($menu);
  //var_dump($submenu);

  if ($label_acf) {
    $menu['80.025'][0] = $label_acf;
  }
});

// Admin Custom Button Jamstack Deployments
add_action('admin_head', function() {
  $bgcolor = get_theme_mod('admin_button_bgcolor_jamdep');

  if ($bgcolor) {
    echo '<style>' .
      '#wpcontent #wpadminbar .wp-jamstack-deployments-button > a { background-color: ' .
      $bgcolor .
      ' !important; }' .
      '</style>';
  }
});