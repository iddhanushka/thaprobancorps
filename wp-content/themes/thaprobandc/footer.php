<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'thaproband_container_type' );
?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="company-summer">
						<img src="<?php echo get_template_directory_uri(); ?>/img/Thaproban-DC.png" alt="Thaproban-DC">
						<p>Thaproban Corps. Security & Investigations (Pvt) Ltd. is a leading private security firm based in Sri Lanka.</p>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
						<a href="<?php echo get_site_url() ?>/about-us">about us</a>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="our-links">
						<h1>Terms & policies</h1>
						<ul>
							<li><a href="<?php echo get_site_url(); ?>/terms-conditions">Terms & conditions</a></li>
							<li><a href="<?php echo get_site_url(); ?>/privacy-policy">Privacy policy</a></li>
							<!-- <li><a href="<?php echo get_site_url(); ?>/blog">Blog</a></li> -->
							<!-- <li><a href="<?php echo get_site_url(); ?>/contact">Contact Us</a></li> -->
						</ul>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="products">
						<h1>Our services</h1>
						<ul>
							<li><a href="<?php echo get_site_url(); ?>/services">Industrial security</a></li>
							<li><a href="<?php echo get_site_url(); ?>/services">Body guards</a></li>
							<li><a href="<?php echo get_site_url(); ?>/services">Investigations & audits</a></li>
							<li><a href="<?php echo get_site_url(); ?>/services">CCTV cameras</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="contact">
						<h1>Contact us</h1>
						<ul>
							<li class="address"><i class="fas fa-map-marker-alt"></i>
								<address>
									No.264, 2nd Floor, <br>
									Jana Jaya City, Rajagiriya 10107, <br>
									Sri Lanka.
								</address>
							</li>
							<li><i class="fas fa-phone-alt"></i><a href="tel:+94113042718">(+94) ­011 ­30 ­42 718</a></li>
							<li><i class="fas fa-envelope"></i><a href="mailto:thaprobancorps@gmail.com">thaprobancorps@gmail.com</a></li>
							<li>
								<ul class="social-media">
									<li><a href="https://www.facebook.com/thaprobandc.lk/" target="blank"><i class="fab fa-facebook-square"></i></a></li>
									<li><a href="skype:.cid4d855e46c2233298?call"><i class="fab fa-skype"></i></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

		<div class="powered-by">
			<div class="container">
				<h6>&copy; <?php echo date('Y'); ?> <a href="">Hexacode&trade;</a> All Rights Reserved. SL Company No.52404528</h6>
			</div>
		</div>

	</footer>



	


<?php wp_footer(); ?>

<script>
		AOS.init();
	</script>

</body>

</html>

