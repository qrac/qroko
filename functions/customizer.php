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
    'description' => '',
    'priority'    => 27,
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

  // Preview
  $wp_customize->add_section('preview_section', array(
    'title' => 'プレビューの設定',
    'description' => '',
    'priority' => 28
  ));
  $wp_customize->add_setting('preview_body_max_width', array(
    'default' => 750,
    'type' => 'option'
  ));
  $wp_customize->add_control('preview_body_max_width', array(
    'label' => '最大幅',
    'description' => 'サイトの最大幅を変更できます。設定した幅はGutenbergにも適応されます。 ※単位はpx',
    'section' => 'preview_section',
    'settings' => 'preview_body_max_width',
    'type' => 'number',
    'input_attrs' => array(
      'min' => 0
    ),
    'priority' => 10
  ));

  // Custom Admin
  $wp_customize->add_section('admin_section', array(
    'title' => '管理画面の設定',
    'description' => '',
    'priority' => 29
  ));
  $wp_customize->add_setting('hidden_admin_label_comments', array(
    'default' => true,
    'type' => 'option'
  ));
  $wp_customize->add_control('hidden_admin_label_comments', array(
    'label' => 'コメントを非表示',
    'description' => '',
    'section' => 'admin_section',
    'settings' => 'hidden_admin_label_comments',
    'type' => 'checkbox',
    'priority' => 10
  ));
  $wp_customize->add_setting('admin_label_acf', array(
    'default' => 'ACF',
    'type' => 'option'
  ));
  $wp_customize->add_control('admin_label_acf', array(
    'label' => 'Advanced Custom Fields',
    'description' => '管理画面のメニュー「カスタムフィールド」を上書きできます。',
    'section' => 'admin_section',
    'settings' => 'admin_label_acf',
    'type' => 'text',
    'priority' => 11
  ));
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