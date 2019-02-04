<?php
/*
Plugin Name: GC Pages
Description: Allows for the ability to do rapid development of miscellaneous pages
Version: 1.0
Author: Paul Lyons
*/


function gc_styles() {
	wp_enqueue_style( 'gc-styles-framework', plugins_url() .'/gc-pages/css/gc-pages-framework.css',false,'1.1','all');
	wp_enqueue_style( 'gc-styles', plugins_url() .'/gc-pages/css/gc-pages.css',false,'1.1','all');
}

add_action('wp_enqueue_scripts', 'gc_styles');



function gc_scripts() {

	wp_register_script('jquery-easing', plugins_url() . '/gc-pages/js/jquery.easing.js', array('jquery'), null, true );
	wp_enqueue_script('jquery-easing');

	wp_register_script('gc-script', plugins_url() . '/gc-pages/js/gc-pages.js', array('jquery'), null, true );
	wp_enqueue_script('gc-script');
}
add_action( 'wp_enqueue_scripts', 'gc_scripts', 20, 1);