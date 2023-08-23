<?php
/**
 * Plugin Name: Elementor Fetch Accordion
 * Description: Adds an Elementor Widget which fetches & renders accordion data.
 * Author:      Neil Smith
 * Text Domain: elementor-fetch-accordion
 */

function efaq_register_widgets( $widgets_manager ) {
	require_once( __DIR__ . '/widgets/fetch-accordion.php' );

	$widgets_manager->register( new \Elementor_EFaq_Dynamic_FAQ() );
}
add_action( 'elementor/widgets/register', 'efaq_register_widgets' );

function efaq_frontend_stylesheets() {
	wp_register_style( 'fetch-accordion-css', plugins_url( 'assets/css/fetch-accordion.css', __FILE__ ) );

	wp_enqueue_style( 'fetch-accordion-css' );
}
add_action( 'elementor/frontend/before_enqueue_styles', 'efaq_frontend_stylesheets' );

function efaq_frontend_scripts() {
	wp_register_script( 'fetch-accordion-js', plugins_url( 'assets/js/fetch-accordion.js', __FILE__ ), [ 'jquery' ] );

	wp_enqueue_script( 'fetch-accordion-js' );
}
add_action( 'elementor/frontend/before_register_scripts', 'efaq_frontend_scripts' );