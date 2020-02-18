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

<div class="hero image">
			<img src=http://localhost:8888/accelerate/wp-content/uploads/2020/02/taxi-photo-about.jpg alt="Taxi" style="width:100%">
			<div class="centered"><h3>Accelerate is a strategy and marketing agency <br> located in the heart of NYC.
				 Our goal is to build <br> businesses by making our clients visible and <br> making their customers smile.</h3>
				 </div>
</div>

		<div class="intro"  role="intro copy">
			<h6> OUR SERVICES </h6>
			<p> We take pride in our clients and the content we create for them.<br>
					Here’s a brief overview of our offered services.</p>
				</div>


<div class="services-list">
						<?php query_posts('posts_per_page=4&post_type=services'); ?>
				 			 	<?php while ( have_posts() ) : the_post();
										$service = get_field ("service");
										$description = get_field ("description");
										$image = get_field ("image");
										$size = "medium";?>


							<div class= "image"><?php if ($image) {
								echo wp_get_attachment_image($image, $size);
							} ?>
						</div>
							<div class="copy"><h2> <?php echo $service; ?> </h2>
							<p> <?php echo $description;?> </p>
						</div>
				   					<?php endwhile; //end of the loop. ?>
										<?php wp_reset_query(); //resets the altered query back to the original?>
				</div><!-- .services list -->

<div class = "contact">
<div class="contact-flex-container">
	<h2> Interested in working with us? </h2>
	<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
</div><!--.contact-flex-container for .contact -->
</div>



<?php get_footer(); ?>
