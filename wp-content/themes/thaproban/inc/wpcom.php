<?php
/**
 * WordPress.com-specific functions and definitions
 *
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Adds support for wp.com-specific theme functions.
 *
 * @global array $themecolors
 */
add_action( 'after_setup_theme', 'thaproband_wpcom_setup' );

if ( ! function_exists( 'thaproband_wpcom_setup' ) ) {
	function thaproband_wpcom_setup() {
		global $themecolors;

		// Set theme colors for third party services.
		if ( ! isset( $themecolors ) ) {
			$themecolors = array(
				'bg'     => '',
				'border' => '',
				'text'   => '',
				'link'   => '',
				'url'    => '',
			);
		}

		/* Add WP.com print styles */
		add_theme_support( 'print-styles' );
	}
}


/*
 * WordPress.com-specific styles
 */
add_action( 'wp_enqueue_scripts', 'thaproband_wpcom_styles' );

if ( ! function_exists( 'thaproband_wpcom_styles' ) ) {
	function thaproband_wpcom_styles() {
		wp_enqueue_style( 'thaproband-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', array(), '20160411' );
	}
}
