<?php
//----------------------------------------------------
// Widget
//----------------------------------------------------

// Add widgets
function qroko_widgets_init() {
  register_sidebar(array(
    'name' => __('Custom Widgets', 'qroko'),
    'id' => 'qroko_custom_widgets',
    'before_widget' => '<div class="app-widget-column">',
    'after_widget' => '</div>'
  ));
}
add_action('widgets_init', 'qroko_widgets_init');