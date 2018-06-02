<?php
function cybertron21_enqueue_styles() {
    $parent_style = 'twentyseventeen';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cybertron21', get_stylesheet_directory_uri() . '/style.css', 
        array( $parent_style ));
}
add_action( 'wp_enqueue_scripts', 'cybertron21_enqueue_styles' );
?>
