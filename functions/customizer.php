<?php
//----------------------------------------------------
// Customizer
//----------------------------------------------------

// Remove Theme Customizer
function remove_theme_customizer( $wp_customize ) {
  $wp_customize->remove_control('site_icon');
}
add_action( 'customize_register', 'remove_theme_customizer' );

// Add Theme Customizer
function add_theme_customizer($wp_customize) {
  // Logo, Icon
  $wp_customize   -> add_section( 'logo_section', array(
    'title'       => 'ロゴ・アイコン',
    'priority'    => 27,
    'description' => 'サイトで利用するロゴ・アイコンの設定。',
  ));
  $wp_customize   -> add_setting('logo_url');
  $wp_customize   -> add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_url', array(
    'label'       => 'ロゴ',
    'section'     => 'logo_section',
    'settings'    => 'logo_url',
    'description' => 'ログイン画面のロゴ画像を上書きします。',
    'priority' => 10
  )));
  $wp_customize   -> add_setting('icon_url');
  $wp_customize   -> add_control( new WP_Customize_Image_Control( $wp_customize, 'icon_url', array(
    'label'       => 'アイコン',
    'section'     => 'logo_section',
    'settings'    => 'icon_url',
    'description' => 'スマホのホーム画面に追加する画像として設定されます。',
    'priority' => 11
  )));
  $wp_customize   -> add_setting('favicon_url');
  $wp_customize   -> add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_url', array(
    'label'       => 'ファビコン',
    'section'     => 'logo_section',
    'settings'    => 'favicon_url',
    'description' => 'ファビコンとして設定されます。',
    'priority' => 12
  )));
}
add_action('customize_register', 'add_theme_customizer');

// Get Image URL
function get_custom_logo_url() {
  return esc_url(get_theme_mod('logo_url'));
}
function get_custom_icon_url() {
  return esc_url(get_theme_mod('icon_url'));
}
function get_custom_favicon_url() {
  return esc_url(get_theme_mod('favicon_url'));
}