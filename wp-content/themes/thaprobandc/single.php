<?php
/**
 * The template for displaying all single posts.
 *
 * @package thaproband
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section id="single-post">
	<div class="container">
	<div class="row">

		<div class="col-lg-9">
			<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="single-blog-card" data-aos="fade-up"  data-aos-duration="1500">
				<div class="blog-card-header">
					<?php echo get_the_post_thumbnail(); ?>
				</div>
				<div class="blog-card-body">
					<h1><?php the_title(); ?> <span>Posted on <?php the_date(); ?> by <?php the_author(); ?></span></h1>
					<?php the_content(); ?>
				</div>
		
			</div>

			<div class="post-pagination-nav">
				<?php thaproband_post_nav(); ?>
			</div>

			<div class="comment-area" data-aos="fade-up"  data-aos-duration="1500">
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>

			<?php endwhile; // end of the loop. ?>

		</div>

		<div class="col-lg-3">
			<div class="side-bar" data-aos="fade-left" data-aos-duration="1500">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</div>
		</div>

	





</div><!-- .row -->

	</div>
</section>


<?php get_footer(); ?>
