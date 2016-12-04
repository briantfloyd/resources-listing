<?php

function add_theme_scripts() {
    if ( is_child_theme() ) {
        // load parent stylesheet first if this is a child theme
		wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load Bootstrap stylesheet
    wp_enqueue_style( 'bootstrap-stylesheet', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );

    // load custom stylesheet
    wp_enqueue_style( 'resources-stylesheet', get_template_directory_uri() . '/css/resources.css' );

    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri() );

    // load jQuery scripts
    wp_enqueue_script( 'jquery-script', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );

    // load Bootstrap scripts
    wp_enqueue_script( 'bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', null, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_theme_support( 'automatic-feed-links' );

?>