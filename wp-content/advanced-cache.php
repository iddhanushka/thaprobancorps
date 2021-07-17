<?php 
defined( 'ABSPATH' ) || exit;
define( 'BREEZE_ADVANCED_CACHE', true );
if ( is_admin() ) { return; }
if ( ! @file_exists( 'C:\xampp\htdocs\thaprobancorps\wp-content\plugins\breeze/breeze.php' ) ) { return; }
$config = 'C:\xampp\htdocs\thaprobancorps/wp-content/breeze-config/breeze-config.php';
if ( empty( $config ) || ! @file_exists( $config ) ) { return; }
$GLOBALS['breeze_config'] = include $config;
if ( empty( $GLOBALS['breeze_config'] ) || empty( $GLOBALS['breeze_config']['cache_options']['breeze-active'] ) ) { return; }
if ( @file_exists( 'C:\xampp\htdocs\thaprobancorps\wp-content\plugins\breeze/inc/cache/execute-cache.php' ) ) {
	include_once 'C:\xampp\htdocs\thaprobancorps\wp-content\plugins\breeze/inc/cache/execute-cache.php';
}
