<?php

add_action('wp_enqueue_scripts', 'register_my_scripts');

function register_my_scripts() {
    wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css'  );
}

?>


 