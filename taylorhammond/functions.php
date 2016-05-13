<?php

function taylorhammond_enqueue_style() {
	wp_enqueue_style( 'core', get_stylesheet_uri() );
}

function taylorhammond_enqueue_script() {
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), true );
}

add_action( 'wp_enqueue_scripts', 'taylorhammond_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'taylorhammond_enqueue_script' );

?>