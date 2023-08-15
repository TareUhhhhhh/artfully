<?php

// REMOVE ADMIN BAR FOR ALL USERS
add_filter('show_admin_bar', '__return_false');

function mytheme_enqueue_style() {
	wp_enqueue_style ('mytheme-style', get_stylesheet_uri());
}
add_action ('wp_enqueue_scripts', 'mytheme_enqueue_style');

// THIS ONE ADDS THE STYLE TO THE BACK END ADMIN AREA
wp_enqueue_style( 'style', get_stylesheet_uri() );

function register_my_menu() {
	register_nav_menu('header-menu',__( 'Header Menu'));
}
add_action('init', 'register_my_menu');