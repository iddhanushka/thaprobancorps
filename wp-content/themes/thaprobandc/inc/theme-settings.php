<?php
/**
 * Check and setup theme's default settings
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'thaproband_setup_theme_default_settings' ) ) {
	function thaproband_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$thaproband_posts_index_style = get_theme_mod( 'thaproband_posts_index_style' );
		if ( '' == $thaproband_posts_index_style ) {
			set_theme_mod( 'thaproband_posts_index_style', 'default' );
		}

		// Sidebar position.
		$thaproband_sidebar_position = get_theme_mod( 'thaproband_sidebar_position' );
		if ( '' == $thaproband_sidebar_position ) {
			set_theme_mod( 'thaproband_sidebar_position', 'right' );
		}

		// Container width.
		$thaproband_container_type = get_theme_mod( 'thaproband_container_type' );
		if ( '' == $thaproband_container_type ) {
			set_theme_mod( 'thaproband_container_type', 'container' );
		}
	}
}
