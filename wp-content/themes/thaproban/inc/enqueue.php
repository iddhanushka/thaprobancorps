<?php
/**
 * thaproband enqueue scripts
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'thaproband_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function thaproband_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		// $css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		// wp_enqueue_style( 'thaproband-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		
		wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/css/styles.min.css', array() );
		wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.css', array() );
		wp_enqueue_style( 'fontawesome-styles', get_template_directory_uri() . '/vendor/fontawesome/all.min.css', array() );
		wp_enqueue_style( 'aos-scroll-styles', get_template_directory_uri() . '/vendor/aos/aos.css', array() );
		wp_enqueue_style( 'slick-slider-styles', get_template_directory_uri() . '/vendor/slick/slick.css', array() );
		wp_enqueue_style( 'slick-slider-theme-styles', get_template_directory_uri() . '/vendor/slick/slick-theme.css', array() );
		
		wp_enqueue_script( 'jquery' );

		// $js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		// wp_enqueue_script( 'thaproband-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		
		wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array(), true );
		wp_enqueue_script( 'fontawesome-scripts', get_template_directory_uri() . '/vendor/fontawesome/all.min.js', array(), true );
		wp_enqueue_script( 'aos-scroll-scripts', get_template_directory_uri() . '/vendor/aos/aos.js', array(), true );
		wp_enqueue_script( 'slick-slider-scripts', get_template_directory_uri() . '/vendor/slick/slick.min.js', array(), true );

		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'thaproband_scripts' ).

add_action( 'wp_enqueue_scripts', 'thaproband_scripts' );
