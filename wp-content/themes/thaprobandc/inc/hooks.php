<?php
/**
 * Custom hooks.
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'thaproband_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function thaproband_site_info() {
		do_action( 'thaproband_site_info' );
	}
}

if ( ! function_exists( 'thaproband_add_site_info' ) ) {
	add_action( 'thaproband_site_info', 'thaproband_add_site_info' );

	/**
	 * Add site info content.
	 */
	function thaproband_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'<a href="%1$s">%2$s</a><span class="sep"> | </span>%3$s(%4$s)',
			esc_url( __( 'http://wordpress.org/', 'thaproband' ) ),
			sprintf(
				/* translators:*/
				esc_html__( 'Proudly powered by %s', 'thaproband' ),
				'WordPress'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Theme: %1$s by %2$s.', 'thaproband' ),
				$the_theme->get( 'Name' ),
				'<a href="' . esc_url( __( 'http://thaproband.com', 'thaproband' ) ) . '">thaproband.com</a>'
			),
			sprintf( // WPCS: XSS ok.
				/* translators:*/
				esc_html__( 'Version: %1$s', 'thaproband' ),
				$the_theme->get( 'Version' )
			)
		);

		echo apply_filters( 'thaproband_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
