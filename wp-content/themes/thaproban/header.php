<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'thaproband_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

	<header class="main-header">
		<div class="container">
			<nav class="navbar navbar-expand-md navbar-dark pl-0 pr-0">

				<!-- Your site title as branding in the menu -->
				<div class="company-brand">
				
					<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>


					<?php } else {
					the_custom_logo();
					} ?>

				</div>

				<div class="main-menu">
					<div class="row">
					<div class="company-info">
						<ul>
							<li>24/365</li>
							<li>Call now: <a href="tel:+94770070777">(+94) 77 00 70 777</a></li>
							<li class="fb"><a href="https://www.facebook.com/thaprobandc.lk/" target="blank"><i class="fab fa-facebook-f"></i></a></li>
							<li class="skype"><a href="skype:.cid4d855e46c2233298?call"><i class="fab fa-skype"></i></a></li>
						</ul>
					</div>

					<div class="main-menu-bar">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'thaproband' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>

						<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'collapse navbar-collapse',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav ml-auto',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu',
							'depth'           => 2,
							'walker'          => new thaproband_WP_Bootstrap_Navwalker(),
						)
						); ?>

					</div>

					</div>
				</div>

			</nav>
		</div>
	</header>


		

