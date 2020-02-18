<?php
/**
 * The template for displaying the about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>


<div class="services" role="body">
		<?php while ( have_posts() ) : the_post();
		$service = get_field ('service');
		$description = get_field ('description');
		$image = get_field ('image');
		?>
	<?php endwhile; // end of the loop. ?>
		</div><!-- .services -->

<?php get_footer (); ?>
