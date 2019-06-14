<?php
//----------------------------------------------------
// Functions
//----------------------------------------------------

$includes = array(
  '/inc',
);

foreach ( $includes as $include ) {
  foreach ( glob( __DIR__ . $include . '/*.php' ) as $file ) {
    $template_name = str_replace( array( trailingslashit( __DIR__ ), '.php' ), '', $file );
    get_template_part( $template_name );
  }
}