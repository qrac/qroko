<?php
//----------------------------------------------------
// Customizer
//----------------------------------------------------

// Customize Register
function qroko_customize_register($wp_customize) {

  // Max site width
  $wp_customize->add_setting('qroko_max_site_width', array(
    'default' => null,
    'type' => 'option',
    'sanitize_callback' => 'absint'
  ));
  $wp_customize->add_control('qroko_max_site_width', array(
    'label' => __('Maximum site width', 'qroko'),
    'description' => __('Allows you to change the maximum width of your site. The width you set will also be applied to the block editor. The unit is px.', 'qroko'),
    'section' => 'title_tagline',
    'settings' => 'qroko_max_site_width',
    'type' => 'number',
    'input_attrs' => array(
      'min' => 0
    ),
    'priority' => 100
  ));

  // Hide page thumbnail
  $wp_customize->add_setting('qroko_hide_page_thumbnail', array(
    'default' => false,
    'type' => 'option',
    'sanitize_callback' => 'qroko_sanitize_checkbox'
  ));
  $wp_customize->add_control('qroko_hide_page_thumbnail', array(
    'label' => __('Hide thumbnail in page top', 'qroko'),
    'description' => '',
    'section' => 'title_tagline',
    'settings' => 'qroko_hide_page_thumbnail',
    'type' => 'checkbox',
    'priority' => 110
  ));

  // Hide post navigation
  $wp_customize->add_setting('qroko_hide_post_navigation', array(
    'default' => false,
    'type' => 'option',
    'sanitize_callback' => 'qroko_sanitize_checkbox'
  ));
  $wp_customize->add_control('qroko_hide_post_navigation', array(
    'label' => __('Hide previous/next navigation in post', 'qroko'),
    'description' => '',
    'section' => 'title_tagline',
    'settings' => 'qroko_hide_post_navigation',
    'type' => 'checkbox',
    'priority' => 120
  ));

  // Hide post comment
  $wp_customize->add_setting('qroko_hide_post_comment', array(
    'default' => false,
    'type' => 'option',
    'sanitize_callback' => 'qroko_sanitize_checkbox'
  ));
  $wp_customize->add_control('qroko_hide_post_comment', array(
    'label' => __('Hide comment field in all post', 'qroko'),
    'description' => '',
    'section' => 'title_tagline',
    'settings' => 'qroko_hide_post_comment',
    'type' => 'checkbox',
    'priority' => 130
  ));

  // Sanitize checkbox
  function qroko_sanitize_checkbox($checked){
    return ((isset($checked) && true == $checked) ? true : false);
  }

}
add_action('customize_register', 'qroko_customize_register');