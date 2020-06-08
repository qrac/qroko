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

// Change Menu Label
function change_menu_label() {
  $label_acf = get_option('custom_admin_label_acf');

  global $menu;
  global $submenu;
  //var_dump($menu);
  //var_dump($submenu);

  if ($label_acf) {
    $menu['80.025'][0] = $label_acf;
  }
}
add_action( 'admin_menu', 'change_menu_label' );