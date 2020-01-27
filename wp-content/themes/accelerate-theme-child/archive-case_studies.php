<?php
/**
 * The template for displaying the archive of case studies.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $image_1 = get_field ('image_1');
        $size = "full";
        $services = get_field('services');
        ?>
			</div><!-- .main-content -->
    <article class = "case-study">
          <aside class = "case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h6><?php echo $services; ?></h6>
            <?php the_excerpt(); ?>

            <p><strong><a href="<?php echo $link; ?>">View Project></a><strong></p>

          </aside>

          <div class="case-study-images">
             <?php if ($image_1) {
               echo wp_get_attachment_image($image_1, $size);
             }?>

			<?php endwhile; // end of the loop. ?>

	</article>
	</div><!-- #primary -->
</div>
<?php get_footer(); ?>
