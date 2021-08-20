<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

	<section id="posts" class="section-t-padding">
		<div class="container">
			<div class="row">

				<div class="col-lg-9 col-md-12">

					<div class="row">
						<?php if ( have_posts() ) : ?>

							<?php /* Start the Loop */ ?>

							<?php while ( have_posts() ) : the_post(); ?>

								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="post-card" data-aos="zoom-in" data-aos-duration="1500">
										<div class="card-img">
											<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
										</div>

										<div class="card-content">
											<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
											<p><?php echo wp_trim_words(get_the_content(), '15'); ?><a href="<?php the_permalink(); ?>" class="continue-reading"> Continue reading</a></p>
										</div>
									</div>
								</div>
								

							<?php endwhile; ?>

							<?php else : ?>

							<?php get_template_part( 'loop-templates/content', 'none' ); ?>

							<?php endif; ?>

					</div>
					
					<div class="post-pagination-links">
						<!-- The pagination component -->
						<?php thaproband_pagination(); ?>
					</div>
					
				</div>

				<div class="col-lg-3 col-md-12">
					<div class="recent-blogs" data-aos="fade-left" data-aos-duration="1500">
						<?php dynamic_sidebar( 'right-sidebar' ); ?>
					</div>
				</div>

			</div><!-- .row -->
		</div>
	</section>
		

	

<?php get_footer(); ?>
