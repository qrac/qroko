<?php
//----------------------------------------------------
// Dashboard
//----------------------------------------------------

// Admin Custom Login Logo
function admin_custom_login_logo() {
  $logo_url = get_custom_logo_url();

  if($logo_url) {
    echo '<style type="text/css">h1 a { background: url(' . $logo_url .
      ') no-repeat center center / contain !important; width: 200px !important; } </style>';
  }
}
add_action('login_head', 'admin_custom_login_logo');

// Admin Custom Icon
function admin_custom_icon() {
  $apple_touch_icon_url = get_custom_icon_url();

  if($icon_url) {
    echo '<link rel="apple-touch-icon" href="' .
    $icon_url .
      '" />';
  }
}
add_action('admin_head', 'admin_custom_icon');

// Admin Custom Favicon
function admin_custom_favicon() {
  $favicon_url = get_custom_favicon_url();

  if($favicon_url) {
    echo '<link rel="icon" href="' .
      $favicon_url .
      '" />';
  }
}
add_action('admin_head', 'admin_custom_favicon');

// Admin Remove Bar Menu
function admin_remove_bar_menus( $wp_admin_bar ) {
  $hidden_comments = get_option('hidden_admin_label_comments');

  if ($hidden_comments) {
    $wp_admin_bar->remove_menu( 'comments' );
  }
}
add_action( 'admin_bar_menu', 'admin_remove_bar_menus', 99 );

// Admin Remove Menu
function admin_remove_menus () {
  $hidden_comments = get_option('hidden_admin_label_comments');

  global $menu;

  if ($hidden_comments) {
    unset($menu[25]); // コメント
  }
}
add_action('admin_menu', 'admin_remove_menus');

// Admin Custom Menu Label
function admin_custom_menu_label() {
  $label_acf = get_option('admin_label_acf');

  global $menu;
  global $submenu;
  //var_dump($menu);
  //var_dump($submenu);

  if ($label_acf) {
    $menu['80.025'][0] = $label_acf;
  }
}
add_action( 'admin_menu', 'admin_custom_menu_label' );