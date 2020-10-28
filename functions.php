<?php

add_action('wp_enqueue_scripts', 'register_my_scripts');

function register_my_scripts() {
    wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css'  );
}


// Disable rest API interface for unregistered users
add_filter( 'rest_authentication_errors', function( $result ) { 
  if ( ! empty( $result ) ) { 
    return $result; 
  } 
  if ( ! is_user_logged_in() ) { 
    return new WP_Error( '401', 'not allowed.', array('status' => 401) ); 
  } 
  return $result;
});



?>


 